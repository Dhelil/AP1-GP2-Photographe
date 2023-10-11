<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231007165024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande_contact (id INT AUTO_INCREMENT NOT NULL, description_demande LONGTEXT NOT NULL, objet_demande LONGTEXT NOT NULL, date_demande DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD id_demande_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497EC7ABB2 FOREIGN KEY (id_demande_user_id) REFERENCES demande_contact (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6497EC7ABB2 ON user (id_demande_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497EC7ABB2');
        $this->addSql('DROP TABLE demande_contact');
        $this->addSql('DROP INDEX IDX_8D93D6497EC7ABB2 ON user');
        $this->addSql('ALTER TABLE user DROP id_demande_user_id');
    }
}
