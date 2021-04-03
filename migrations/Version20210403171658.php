<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210403171658 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add Dinner entity and add preference columns to User entity';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dinner (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, cost SMALLINT NOT NULL, duration SMALLINT NOT NULL, ingredients LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', image LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD cost SMALLINT DEFAULT NULL, ADD duration SMALLINT DEFAULT NULL, ADD exclude LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\', CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dinner');
        $this->addSql('ALTER TABLE user DROP cost, DROP duration, DROP exclude, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
