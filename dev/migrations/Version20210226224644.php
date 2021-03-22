<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226224644 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_6EEAA67D19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_produit (commande_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_DF1E9E8782EA2E54 (commande_id), INDEX IDX_DF1E9E87F347EFB (produit_id), PRIMARY KEY(commande_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_commerce (commande_id INT NOT NULL, commerce_id INT NOT NULL, INDEX IDX_6DD5E56382EA2E54 (commande_id), INDEX IDX_6DD5E563B09114B7 (commerce_id), PRIMARY KEY(commande_id, commerce_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commerce (id INT AUTO_INCREMENT NOT NULL, type_entreprise_id INT DEFAULT NULL, proprietaire_id INT DEFAULT NULL, image_name VARCHAR(255) INT DEFAULT NULL, image_size INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, telephone INT NOT NULL, disponibilite TINYINT(1) NOT NULL, numero_siret INT NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, code_postal INT NOT NULL, pays VARCHAR(255) NOT NULL, INDEX IDX_BBF5FDF9D44318DF (type_entreprise_id), INDEX IDX_BBF5FDF976C50E4A (proprietaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commerce_specialite (commerce_id INT NOT NULL, specialite_id INT NOT NULL, INDEX IDX_C45C1E5DB09114B7 (commerce_id), INDEX IDX_C45C1E5D2195E0F0 (specialite_id), PRIMARY KEY(commerce_id, specialite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, commerce_id INT DEFAULT NULL, type_produit_id INT DEFAULT NULL, image_name VARCHAR(255) INT DEFAULT NULL, image_size INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_29A5EC27B09114B7 (commerce_id), INDEX IDX_29A5EC271237A8DE (type_produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_entreprise (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_produit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone INT NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, user_type TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E8782EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E87F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_commerce ADD CONSTRAINT FK_6DD5E56382EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_commerce ADD CONSTRAINT FK_6DD5E563B09114B7 FOREIGN KEY (commerce_id) REFERENCES commerce (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commerce ADD CONSTRAINT FK_BBF5FDF9D44318DF FOREIGN KEY (type_entreprise_id) REFERENCES type_entreprise (id)');
        $this->addSql('ALTER TABLE commerce ADD CONSTRAINT FK_BBF5FDF976C50E4A FOREIGN KEY (proprietaire_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commerce_specialite ADD CONSTRAINT FK_C45C1E5DB09114B7 FOREIGN KEY (commerce_id) REFERENCES commerce (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commerce_specialite ADD CONSTRAINT FK_C45C1E5D2195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27B09114B7 FOREIGN KEY (commerce_id) REFERENCES commerce (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC271237A8DE FOREIGN KEY (type_produit_id) REFERENCES type_produit (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E8782EA2E54');
        $this->addSql('ALTER TABLE commande_commerce DROP FOREIGN KEY FK_6DD5E56382EA2E54');
        $this->addSql('ALTER TABLE commande_commerce DROP FOREIGN KEY FK_6DD5E563B09114B7');
        $this->addSql('ALTER TABLE commerce_specialite DROP FOREIGN KEY FK_C45C1E5DB09114B7');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27B09114B7');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E87F347EFB');
        $this->addSql('ALTER TABLE commerce_specialite DROP FOREIGN KEY FK_C45C1E5D2195E0F0');
        $this->addSql('ALTER TABLE commerce DROP FOREIGN KEY FK_BBF5FDF9D44318DF');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC271237A8DE');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D19EB6921');
        $this->addSql('ALTER TABLE commerce DROP FOREIGN KEY FK_BBF5FDF976C50E4A');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_produit');
        $this->addSql('DROP TABLE commande_commerce');
        $this->addSql('DROP TABLE commerce');
        $this->addSql('DROP TABLE commerce_specialite');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE type_entreprise');
        $this->addSql('DROP TABLE type_produit');
        $this->addSql('DROP TABLE user');
    }
}
