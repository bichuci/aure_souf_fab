<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201212134027 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, cp VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, rue VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE biere (id INT AUTO_INCREMENT NOT NULL, brasserie_id_id INT DEFAULT NULL, categorie_id_id INT NOT NULL, note_user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, date_creation DATE DEFAULT NULL, note INT DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, INDEX IDX_D33ECD16A14CB8D (brasserie_id_id), INDEX IDX_D33ECD18A3C7387 (categorie_id_id), INDEX IDX_D33ECD126C8170F (note_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brasserie (id INT AUTO_INCREMENT NOT NULL, adresse_id INT NOT NULL, brasseur_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, siteweb VARCHAR(255) DEFAULT NULL, telephone INT DEFAULT NULL, mail VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_B68677764DE7DC5C (adresse_id), UNIQUE INDEX UNIQ_B686777614F987F1 (brasseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire_user (id INT AUTO_INCREMENT NOT NULL, biere_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, commentaire LONGTEXT NOT NULL, INDEX IDX_646B121B2B7C5383 (biere_id_id), INDEX IDX_646B121B9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note_user (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, note INT DEFAULT NULL, INDEX IDX_2DE9C7119D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE security (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, adresse_id_id INT DEFAULT NULL, brasserie_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, telephone INT DEFAULT NULL, bio LONGTEXT DEFAULT NULL, profil_image VARCHAR(255) DEFAULT NULL, is_verified TINYINT(1) NOT NULL, bg_image VARCHAR(255) DEFAULT NULL, reset_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D6491004EF61 (adresse_id_id), UNIQUE INDEX UNIQ_8D93D64952981840 (brasserie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_biere (user_id INT NOT NULL, biere_id INT NOT NULL, INDEX IDX_EFF11789A76ED395 (user_id), INDEX IDX_EFF11789A71147CC (biere_id), PRIMARY KEY(user_id, biere_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE biere ADD CONSTRAINT FK_D33ECD16A14CB8D FOREIGN KEY (brasserie_id_id) REFERENCES brasserie (id)');
        $this->addSql('ALTER TABLE biere ADD CONSTRAINT FK_D33ECD18A3C7387 FOREIGN KEY (categorie_id_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE biere ADD CONSTRAINT FK_D33ECD126C8170F FOREIGN KEY (note_user_id) REFERENCES note_user (id)');
        $this->addSql('ALTER TABLE brasserie ADD CONSTRAINT FK_B68677764DE7DC5C FOREIGN KEY (adresse_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE brasserie ADD CONSTRAINT FK_B686777614F987F1 FOREIGN KEY (brasseur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire_user ADD CONSTRAINT FK_646B121B2B7C5383 FOREIGN KEY (biere_id_id) REFERENCES biere (id)');
        $this->addSql('ALTER TABLE commentaire_user ADD CONSTRAINT FK_646B121B9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE note_user ADD CONSTRAINT FK_2DE9C7119D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6491004EF61 FOREIGN KEY (adresse_id_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64952981840 FOREIGN KEY (brasserie_id) REFERENCES brasserie (id)');
        $this->addSql('ALTER TABLE user_biere ADD CONSTRAINT FK_EFF11789A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_biere ADD CONSTRAINT FK_EFF11789A71147CC FOREIGN KEY (biere_id) REFERENCES biere (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brasserie DROP FOREIGN KEY FK_B68677764DE7DC5C');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6491004EF61');
        $this->addSql('ALTER TABLE commentaire_user DROP FOREIGN KEY FK_646B121B2B7C5383');
        $this->addSql('ALTER TABLE user_biere DROP FOREIGN KEY FK_EFF11789A71147CC');
        $this->addSql('ALTER TABLE biere DROP FOREIGN KEY FK_D33ECD16A14CB8D');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64952981840');
        $this->addSql('ALTER TABLE biere DROP FOREIGN KEY FK_D33ECD18A3C7387');
        $this->addSql('ALTER TABLE biere DROP FOREIGN KEY FK_D33ECD126C8170F');
        $this->addSql('ALTER TABLE brasserie DROP FOREIGN KEY FK_B686777614F987F1');
        $this->addSql('ALTER TABLE commentaire_user DROP FOREIGN KEY FK_646B121B9D86650F');
        $this->addSql('ALTER TABLE note_user DROP FOREIGN KEY FK_2DE9C7119D86650F');
        $this->addSql('ALTER TABLE user_biere DROP FOREIGN KEY FK_EFF11789A76ED395');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE biere');
        $this->addSql('DROP TABLE brasserie');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE commentaire_user');
        $this->addSql('DROP TABLE note_user');
        $this->addSql('DROP TABLE security');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_biere');
    }
}
