<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220318170128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
      /*  $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, zipcode VARCHAR(15) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, city_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_EB95123F3CCE3900 (city_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant_picture (id INT AUTO_INCREMENT NOT NULL, restaurant_id_id INT DEFAULT NULL, filename VARCHAR(255) DEFAULT NULL, INDEX IDX_DC9013FC35592D86 (restaurant_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, restaurant_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, message LONGTEXT DEFAULT NULL, rating INT DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_794381C635592D86 (restaurant_id_id), INDEX IDX_794381C69D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, city_id_id INT DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, INDEX IDX_8D93D6493CCE3900 (city_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123F3CCE3900 FOREIGN KEY (city_id_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE restaurant_picture ADD CONSTRAINT FK_DC9013FC35592D86 FOREIGN KEY (restaurant_id_id) REFERENCES restaurant (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C635592D86 FOREIGN KEY (restaurant_id_id) REFERENCES restaurant (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C69D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493CCE3900 FOREIGN KEY (city_id_id) REFERENCES city (id)');
    */}

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant DROP FOREIGN KEY FK_EB95123F3CCE3900');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493CCE3900');
        $this->addSql('ALTER TABLE restaurant_picture DROP FOREIGN KEY FK_DC9013FC35592D86');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C635592D86');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C69D86650F');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE restaurant_picture');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE user');
    }
}
