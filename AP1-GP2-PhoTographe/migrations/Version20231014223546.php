<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231014223546 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497EC7ABB2');
        $this->addSql('CREATE TABLE prestations (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(150) NOT NULL, prix DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, opt LONGTEXT NOT NULL, nb_photos_retouche INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demande_contact DROP FOREIGN KEY FK_7C955D977EC7ABB2');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE demande_contact');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE prestation');
        $this->addSql('ALTER TABLE presentation ADD description LONGTEXT NOT NULL, ADD expertise LONGTEXT NOT NULL, ADD autre LONGTEXT NOT NULL, ADD intitule_description VARCHAR(255) NOT NULL, ADD intitule_expertise VARCHAR(255) NOT NULL, ADD intitule_autre VARCHAR(255) NOT NULL, DROP libellePresentation, DROP libelleExpertise, DROP libelleCreate, DROP libelleTransformation, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('DROP INDEX IDX_8D93D6497EC7ABB2 ON user');
        $this->addSql('ALTER TABLE user DROP id_demande_user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles JSON NOT NULL, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_880E0D76F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE demande_contact (id INT AUTO_INCREMENT NOT NULL, id_demande_user_id INT DEFAULT NULL, description_demande LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, objet_demande LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_demande DATE NOT NULL, enfant INT NOT NULL, INDEX IDX_7C955D977EC7ABB2 (id_demande_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, libelle_image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prestation (id INT NOT NULL, title VARCHAR(150) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, prix DOUBLE PRECISION DEFAULT NULL, description TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, options TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, nbPhotosEdit INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE demande_contact ADD CONSTRAINT FK_7C955D977EC7ABB2 FOREIGN KEY (id_demande_user_id) REFERENCES demande_contact (id)');
        $this->addSql('DROP TABLE prestations');
        $this->addSql('ALTER TABLE presentation ADD libellePresentation TEXT DEFAULT NULL, ADD libelleExpertise TEXT DEFAULT NULL, ADD libelleCreate TEXT DEFAULT NULL, ADD libelleTransformation TEXT DEFAULT NULL, DROP description, DROP expertise, DROP autre, DROP intitule_description, DROP intitule_expertise, DROP intitule_autre, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD id_demande_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497EC7ABB2 FOREIGN KEY (id_demande_user_id) REFERENCES demande_contact (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6497EC7ABB2 ON user (id_demande_user_id)');
    }
}
