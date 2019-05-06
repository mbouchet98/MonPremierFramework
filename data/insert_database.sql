insert into utilisateur (nom, prenom, age, email) values
  ('Jean','Michel','10/02/1968','jeanMichal@hotmail.com'),
  ('Louis','Dupont','19/12/1958','LouisDupon@hotmail.com'),
  ('Pierre','Dupuis','25/08/1996','PierreDupuis@gmail.com');

insert into question (utilisateur_id, titre, description) values
  (1,'Comment installer un linux ?', 'j ai des soucis, bla bla bla...');

insert into reponse (utilisateur_id, question_id, titre, description) values
  (2, 1, 'c est hyper simple.','installe VirtuelBox et puis bla bla bla ....'),
  (1, 1, 'pas si simple.','j ai probleme avec bla bla bla ....'),
  (3, 1, 'D autre solution','tu peux aussi faire bla bla bla...');

/*Vérifier que les requetes fonction*/
select * from utilisateur;

select * from question;

select * from reponse;

select * from utilisateur
inner join question
on utilisateur.id = question.utilisateur_id
inner join reponse
on question.id = reponse.question_id
order by nom;


insert into utilisateur (nom, prenom, age, email) values
  ('Arthur','Roi','15/12/1958','arthureRoi15@gmail.com');

select * from utilisateur;

insert into utilisateur (nom, prenom, age, email) values
  ('Damien','LePrado','16/05/1968','DAmain@hotmail.com'),
  ('Vincent','Dupont','19/12/2000','Vincent@hotmail.com'),
  ('Jean-Pierre','Dupuis','25/08/1996','Jean-PierreDupuis@gmail.com');

  
