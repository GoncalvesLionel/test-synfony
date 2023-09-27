<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230920160813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3FF631228');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3FF631228');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3FF631228 FOREIGN KEY (etablissement_id) REFERENCES etudiant (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
