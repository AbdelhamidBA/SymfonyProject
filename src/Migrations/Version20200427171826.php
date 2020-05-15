<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200427171826 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin (idAdmin INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(255) NOT NULL, identity VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(idAdmin)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE car (idCar INT AUTO_INCREMENT NOT NULL, carName VARCHAR(255) NOT NULL, carPrice DOUBLE PRECISION NOT NULL, idMark INT NOT NULL, idModel INT NOT NULL, carSeats INT NOT NULL, carYear INT NOT NULL, carColor VARCHAR(255) NOT NULL, carFuel VARCHAR(255) NOT NULL, carPic VARCHAR(255) NOT NULL, PRIMARY KEY(idCar)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE car_model (idModel INT AUTO_INCREMENT NOT NULL, idCar INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(idModel)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (idClient INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(255) NOT NULL, birthdate VARCHAR(255) NOT NULL, identity VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, verif_key VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(idClient)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mark (idMark INT AUTO_INCREMENT NOT NULL, mark VARCHAR(255) NOT NULL, PRIMARY KEY(idMark)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (idRes INT AUTO_INCREMENT NOT NULL, res_date DATE NOT NULL, ret_date DATE NOT NULL, id_client INT NOT NULL, id_car INT NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(idRes)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE car');
        $this->addSql('DROP TABLE car_model');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE mark');
        $this->addSql('DROP TABLE reservation');
    }
}
