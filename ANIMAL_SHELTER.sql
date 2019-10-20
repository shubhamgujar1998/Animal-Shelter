
CREATE DATABASE ANIMAL_SHELTER;

USE ANIMAL_SHELTER;


CREATE TABLE `profile` (
  `prof_id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `prof_type` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` DATE NOT NULL
);


CREATE TABLE `animal`(

    `animal_id`    INT PRIMARY KEY NOT NULL,
    `date_posted`  DATE            NOT NULL,
    `animal_type`  varchar(30)     NOT NULL,
    `animal_color` varchar(15),
    `animal_breed` varchar(30),
    `animal_avail` int             NOT NULL
);

CREATE TABLE `inquiry`(
    `prof_id` INT NOT NULL,
    `animal_id` INT NOT NULL,
    `date_inquiry` DATE NOT NULL,
    `question` varchar(250) NOT NULL,
    `answer` varchar(250),
    `admin_id` INT

);

ALTER TABLE `inquiry`
    ADD PRIMARY KEY (`prof_id`, `animal_id`, `date_inquiry`);

CREATE TABLE `donation`(
    `donation_amt` float NOT NULL,
    `date_donation` varchar(10) NOT NULL,
    `animal_id` INT NOT NULL,
    `prof_id` INT NOT NULL

) ;

ALTER TABLE `donation`
    ADD PRIMARY KEY (`prof_id`, `animal_id`, `date_donation`);

CREATE TABLE `adoption`(
    `date_adoption` DATE NOT NULL,
    `animal_id` INT NOT NULL,
    `prof_id` INT NOT NULL
) ;

ALTER TABLE `adoption`
    ADD PRIMARY KEY (`prof_id`, `animal_id`, `date_adoption`);

CREATE TABLE `likes`(
    `animal_id` INT NOT NULL,
    `prof_id` INT NOT NULL
) ;

ALTER TABLE `likes`
    ADD PRIMARY KEY (`prof_id`, `animal_id`);


CREATE TABLE `dog`(
    `dog_id` INT references animal(animal_id),
    `dog_size` varchar(15)

) ;

CREATE TABLE `cat`(
    `cat_id` INT references animal(animal_id),
    `cat_size` varchar(15)
) ;


CREATE TABLE `horse`(
    `horse_id` INT references animal(animal_id),
    `horse_size` varchar(15)
) ;


CREATE TABLE `admin`(
   `admin_id` INT references profile(prof_id)

);

CREATE TABLE `user`(
   `user_id` INT references profile(prof_id)
) ;


