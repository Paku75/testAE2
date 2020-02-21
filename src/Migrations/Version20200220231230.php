<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200220231230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE classe CHANGE IDCLASSE IDCLASSE INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE IDCOMMENAIRE IDCOMMENAIRE INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE etudiant CHANGE IDETUDIANT IDETUDIANT INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE filiere CHANGE IDFILIERE IDFILIERE INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE offre CHANGE IDOFFRE IDOFFRE INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE post CHANGE IDETUDIANT IDETUDIANT INT NOT NULL, CHANGE IDFORUM IDFORUM CHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE promotion CHANGE IDPROMOTION IDPROMOTION INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE typeoffre CHANGE IDTYPEOFFRE IDTYPEOFFRE INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE typeuser CHANGE IDTYPEUSER IDTYPEUSER INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE IDUSER IDUSER INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE classe CHANGE IDCLASSE IDCLASSE INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE IDCOMMENAIRE IDCOMMENAIRE INT NOT NULL');
        $this->addSql('ALTER TABLE etudiant CHANGE IDETUDIANT IDETUDIANT INT NOT NULL');
        $this->addSql('ALTER TABLE filiere CHANGE IDFILIERE IDFILIERE INT NOT NULL');
        $this->addSql('ALTER TABLE offre CHANGE IDOFFRE IDOFFRE INT NOT NULL');
        $this->addSql('ALTER TABLE post CHANGE IDETUDIANT IDETUDIANT INT DEFAULT NULL, CHANGE IDFORUM IDFORUM CHAR(10) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE promotion CHANGE IDPROMOTION IDPROMOTION INT NOT NULL');
        $this->addSql('ALTER TABLE typeoffre CHANGE IDTYPEOFFRE IDTYPEOFFRE INT NOT NULL');
        $this->addSql('ALTER TABLE typeuser CHANGE IDTYPEUSER IDTYPEUSER INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE IDUSER IDUSER INT NOT NULL');
    }
}
