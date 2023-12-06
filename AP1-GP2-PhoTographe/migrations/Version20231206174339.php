<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231206174339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, id_avis_user_id INT DEFAULT NULL, description_avis LONGTEXT NOT NULL, niveau_avis DOUBLE PRECISION NOT NULL, date_avis DATE NOT NULL, INDEX IDX_8F91ABF0AFAC36E1 (id_avis_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, objet VARCHAR(150) NOT NULL, date DATE DEFAULT NULL, INDEX IDX_4C62E638A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande_contact (id INT AUTO_INCREMENT NOT NULL, id_demande_user_id INT DEFAULT NULL, description_demande LONGTEXT NOT NULL, objet_demande LONGTEXT NOT NULL, date_demande DATE NOT NULL, enfant INT NOT NULL, INDEX IDX_7C955D977EC7ABB2 (id_demande_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, libelle_option VARCHAR(150) NOT NULL, prix_option DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestation (id INT AUTO_INCREMENT NOT NULL, id_option_prestation_id INT NOT NULL, libelle_prestation VARCHAR(150) NOT NULL, prix_prestation DOUBLE PRECISION NOT NULL, INDEX IDX_51C88FADAB9028 (id_option_prestation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_demande_user_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom_user VARCHAR(100) NOT NULL, prenom_user VARCHAR(100) NOT NULL, adresse_user VARCHAR(255) NOT NULL, cp_user VARCHAR(5) NOT NULL, ville_user VARCHAR(150) NOT NULL, genre_user VARCHAR(80) NOT NULL, telephone_user INT NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D6497EC7ABB2 (id_demande_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0AFAC36E1 FOREIGN KEY (id_avis_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE demande_contact ADD CONSTRAINT FK_7C955D977EC7ABB2 FOREIGN KEY (id_demande_user_id) REFERENCES demande_contact (id)');
        $this->addSql('ALTER TABLE prestation ADD CONSTRAINT FK_51C88FADAB9028 FOREIGN KEY (id_option_prestation_id) REFERENCES `option` (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497EC7ABB2 FOREIGN KEY (id_demande_user_id) REFERENCES demande_contact (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0AFAC36E1');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638A76ED395');
        $this->addSql('ALTER TABLE demande_contact DROP FOREIGN KEY FK_7C955D977EC7ABB2');
        $this->addSql('ALTER TABLE prestation DROP FOREIGN KEY FK_51C88FADAB9028');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497EC7ABB2');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE demande_contact');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE prestation');
        $this->addSql('DROP TABLE user');
    }
}
