<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231020073445 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE presentation (id INT AUTO_INCREMENT NOT NULL, description LONGTEXT NOT NULL, expertise LONGTEXT NOT NULL, autre LONGTEXT NOT NULL, intitule_description VARCHAR(255) NOT NULL, intitule_expertise VARCHAR(255) NOT NULL, intitule_autre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prestation DROP FOREIGN KEY FK_51C88FADAB9028');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE prestation');
        $this->addSql('ALTER TABLE demande_contact ADD CONSTRAINT FK_7C955D977EC7ABB2 FOREIGN KEY (id_demande_user_id) REFERENCES demande_contact (id)');
        $this->addSql('DROP INDEX IDX_8D93D6497EC7ABB2 ON user');
        $this->addSql('ALTER TABLE user DROP id_demande_user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, libelle_option VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix_option DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prestation (id INT AUTO_INCREMENT NOT NULL, id_option_prestation_id INT NOT NULL, libelle_prestation VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix_prestation DOUBLE PRECISION NOT NULL, INDEX IDX_51C88FADAB9028 (id_option_prestation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE prestation ADD CONSTRAINT FK_51C88FADAB9028 FOREIGN KEY (id_option_prestation_id) REFERENCES `option` (id)');
        $this->addSql('DROP TABLE presentation');
        $this->addSql('ALTER TABLE demande_contact DROP FOREIGN KEY FK_7C955D977EC7ABB2');
        $this->addSql('ALTER TABLE user ADD id_demande_user_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_8D93D6497EC7ABB2 ON user (id_demande_user_id)');
    }
}
