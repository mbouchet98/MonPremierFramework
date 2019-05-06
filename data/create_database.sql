create table utilisateur(
  id serial,
  nom varchar(20),
  prenom varchar(20),
  age varchar(10),
  email varchar(50),

  constraint pk_user primary key (id)
);

create table question(
  id serial,
  utilisateur_id int,
  titre varchar(100),
  description varchar(1000),

  constraint pk_ques primary key (id),
  constraint fk_ques foreign key (utilisateur_id) references utilisateur (id)
);

create table reponse(
  id serial,
  utilisateur_id int,
  question_id int,
  titre varchar(100),
  description varchar(1000),

  constraint pk_rep primary key (id),
  constraint fk_rep1 foreign key (utilisateur_id) references utilisateur (id),
  constraint fk_rep2 foreign key (question_id) references question (id)
);

/*create table groupe(
  id_groupe serial,
  lib_groupe varchar(100),
  description_groupe varchar(1000),

  constraint pk_rep primary key (id_groupe),
);
*/
