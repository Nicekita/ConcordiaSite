<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602140608 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE Player_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE Realm_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE Town_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE news_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE Player (id INT NOT NULL, town_id INT DEFAULT NULL, uuid VARCHAR(255) NOT NULL, nick_name VARCHAR(255) NOT NULL, cash DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9FB57F5375E23604 ON Player (town_id)');
        $this->addSql('CREATE UNIQUE INDEX UUID_unique ON Player (UUID)');
        $this->addSql('CREATE TABLE Realm (id INT NOT NULL, capital_id INT NOT NULL, name VARCHAR(255) NOT NULL, owner VARCHAR(255) NOT NULL, cash DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3B57F4DEFC2D9FF7 ON Realm (capital_id)');
        $this->addSql('CREATE UNIQUE INDEX RealmName_unique ON Realm (Name)');
        $this->addSql('CREATE TABLE Town (id INT NOT NULL, realm_id INT DEFAULT NULL, owner VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, cash DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_ECD4689A9DFF5F89 ON Town (realm_id)');
        $this->addSql('CREATE UNIQUE INDEX TownName_unique ON Town (Name)');
        $this->addSql('CREATE TABLE news (id INT NOT NULL, header VARCHAR(255) NOT NULL, author VARCHAR(255) NOT NULL, date DATE NOT NULL, text TEXT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, admin BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON "user" (username)');
        $this->addSql('ALTER TABLE Player ADD CONSTRAINT FK_9FB57F5375E23604 FOREIGN KEY (town_id) REFERENCES Town (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE Realm ADD CONSTRAINT FK_3B57F4DEFC2D9FF7 FOREIGN KEY (capital_id) REFERENCES Town (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE Town ADD CONSTRAINT FK_ECD4689A9DFF5F89 FOREIGN KEY (realm_id) REFERENCES Realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE Town DROP CONSTRAINT FK_ECD4689A9DFF5F89');
        $this->addSql('ALTER TABLE Player DROP CONSTRAINT FK_9FB57F5375E23604');
        $this->addSql('ALTER TABLE Realm DROP CONSTRAINT FK_3B57F4DEFC2D9FF7');
        $this->addSql('DROP SEQUENCE Player_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE Realm_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE Town_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE news_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE user_id_seq CASCADE');
        $this->addSql('DROP TABLE Player');
        $this->addSql('DROP TABLE Realm');
        $this->addSql('DROP TABLE Town');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE "user"');
    }
}
