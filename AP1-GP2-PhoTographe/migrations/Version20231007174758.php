<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231007174758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestation ADD id_option_prestation_id INT NOT NULL');
        $this->addSql('ALTER TABLE prestation ADD CONSTRAINT FK_51C88FADAB9028 FOREIGN KEY (id_option_prestation_id) REFERENCES `option` (id)');
        $this->addSql('CREATE INDEX IDX_51C88FADAB9028 ON prestation (id_option_prestation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestation DROP FOREIGN KEY FK_51C88FADAB9028');
        $this->addSql('DROP INDEX IDX_51C88FADAB9028 ON prestation');
        $this->addSql('ALTER TABLE prestation DROP id_option_prestation_id');
    }
}
