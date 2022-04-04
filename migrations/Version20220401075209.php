<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401075209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inn_kat1 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, werja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inn_kat2 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inn_kat3 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inn_kat4 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kadr_kat1 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kadr_kat2 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kadr_kat3 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kadr_kat4 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ksie_kat1 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ksie_kat2 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ksie_kat3 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mar_kat1 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mar_kat2 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mar_kat3 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sprz_kat1 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sprz_kat2 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sprz_kat3 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sprz_kat4 (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(255) NOT NULL, opis LONGTEXT NOT NULL, autor VARCHAR(255) NOT NULL, data DATE NOT NULL, aktualny TINYINT(1) NOT NULL, wersja INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inn_kat1');
        $this->addSql('DROP TABLE inn_kat2');
        $this->addSql('DROP TABLE inn_kat3');
        $this->addSql('DROP TABLE inn_kat4');
        $this->addSql('DROP TABLE kadr_kat1');
        $this->addSql('DROP TABLE kadr_kat2');
        $this->addSql('DROP TABLE kadr_kat3');
        $this->addSql('DROP TABLE kadr_kat4');
        $this->addSql('DROP TABLE ksie_kat1');
        $this->addSql('DROP TABLE ksie_kat2');
        $this->addSql('DROP TABLE ksie_kat3');
        $this->addSql('DROP TABLE mar_kat1');
        $this->addSql('DROP TABLE mar_kat2');
        $this->addSql('DROP TABLE mar_kat3');
        $this->addSql('DROP TABLE sprz_kat1');
        $this->addSql('DROP TABLE sprz_kat2');
        $this->addSql('DROP TABLE sprz_kat3');
        $this->addSql('DROP TABLE sprz_kat4');
    }
}
