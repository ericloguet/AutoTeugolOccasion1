create or replace view vue_voitures_marque as select
ti_voiture.id_voiture,ti_voiture.num_mat,ti_voiture.modele, ti_voiture.carro,ti_voiture.transmission,ti_voiture.km,ti_voiture.prix,ti_voiture.annee,ti_voiture.photo,
ti_marque.id_marque,ti_marque.nom_marque,ti_marque.logo
from ti_marque, ti_voiture
where ti_marque.id_marque = ti_voiture.id_marque;
