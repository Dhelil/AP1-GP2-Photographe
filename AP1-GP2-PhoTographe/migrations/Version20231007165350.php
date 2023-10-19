<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231007165350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_contact ADD id_demande_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_contact ADD CONSTRAINT FK_7C955D977EC7ABB2 FOREIGN KEY (id_demande_user_id) REFERENCES demande_contact (id)');
        $this->addSql('CREATE INDEX IDX_7C955D977EC7ABB2 ON demande_contact (id_demande_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_contact DROP FOREIGN KEY FK_7C955D977EC7ABB2');
        $this->addSql('DROP INDEX IDX_7C955D977EC7ABB2 ON demande_contact');
        $this->addSql('ALTER TABLE demande_contact DROP id_demande_user_id');
    }
}
