INSERT INTO role (id,nom) VALUES
  (1,'Client'),
  (2,'Service Commerciale');

INSERT INTO "user" (prenom, nom, login, password, role_id, adresse, nin, photorecto, photoverso) VALUES
  ('Anna', 'Sock', 'anna_client', 'client123', 1, 'Dakar', 'NIN001', 'anna_re.png', 'anna_ve.png'),
  ('Binta', 'Sow', 'binta_com', 'com123', 2, 'Thiès', 'NIN002', 'binta_re.png', 'binta_ve.png'),
  ('Cheikh', 'Fall', 'cheikh_client', 'client456', 1, 'Saint-Louis', 'NIN003', 'cheikh_re.png', 'cheikh_ve.png');

INSERT INTO compte (numeros, typecompte, solde, user_id) VALUES
  ('CPT001', 'Principal', 50000.00, 1), -- Anna
  ('CPT002', 'Secondaire', 100000.00, 1),
  ('CPT003', 'Principal', 75000.00, 3); -- Cheikh

INSERT INTO transaction (compte_id, montant, typetransaction, status) VALUES
  (1, 15000.00, 'Depos', 'terminer'),
  (1, 5000.00, 'Retrait', 'En_cours'),
  (2, 20000.00, 'Paiement', 'Annuler'),
  (3, 30000.00, 'Depos', 'terminer');

