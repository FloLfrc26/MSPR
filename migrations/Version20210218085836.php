<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210218085836 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenements (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, nom_scene VARCHAR(255) NOT NULL, date_horaire DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infos_actualites (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, texte LONGTEXT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infos_urgentes (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, texte LONGTEXT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE evenements');
        $this->addSql('DROP TABLE infos_actualites');
        $this->addSql('DROP TABLE infos_urgentes');
    }
}
