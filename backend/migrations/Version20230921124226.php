<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230908135927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       $this->addSql('CREATE TABLE ethereum (id INT AUTO_INCREMENT NOT NULL, tokenname VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initialsupply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, template VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');   
       $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
 $this->addSql('CREATE TABLE acala (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE aptos (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE arbitrum (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE aurora (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avalanche (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE base (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bsc (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE canto (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE celo (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cronos (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, deciamls NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evmos (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fantom (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gnosis_chain (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE harmony (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linea (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mantle (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metis (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE moonbeam (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE moonriver (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE optimism (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE polygon (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE polygon_zk_evm (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE velas (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zksync (id INT AUTO_INCREMENT NOT NULL, token_name VARCHAR(255) NOT NULL, symbol VARCHAR(5) NOT NULL, initial_supply NUMERIC(10, 0) NOT NULL, decimals NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE acala');
        $this->addSql('DROP TABLE aptos');
        $this->addSql('DROP TABLE arbitrum');
        $this->addSql('DROP TABLE aurora');
        $this->addSql('DROP TABLE avalanche');
        $this->addSql('DROP TABLE base');
        $this->addSql('DROP TABLE bsc');
        $this->addSql('DROP TABLE canto');
        $this->addSql('DROP TABLE celo');
        $this->addSql('DROP TABLE cronos');
        $this->addSql('DROP TABLE evmos');
        $this->addSql('DROP TABLE fantom');
        $this->addSql('DROP TABLE gnosis_chain');
        $this->addSql('DROP TABLE harmony');
        $this->addSql('DROP TABLE linea');
        $this->addSql('DROP TABLE mantle');
        $this->addSql('DROP TABLE metis');
        $this->addSql('DROP TABLE moonbeam');
        $this->addSql('DROP TABLE moonriver');
        $this->addSql('DROP TABLE optimism');
        $this->addSql('DROP TABLE polygon');
        $this->addSql('DROP TABLE polygon_zk_evm');
        $this->addSql('DROP TABLE velas');
        $this->addSql('DROP TABLE zksync');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP TABLE ethereum');
    }
}
