INSERT INTO role (nom) VALUES
('Client'),               
('Service commercial');   

INSERT INTO "user" (prenom, nom, login, password, role_id, adresse, nin, photorecto, photoverso)
VALUES
('Anna', 'Sock', 'anna.sow', 'motdepasse123', 2, 'Dakar, Sénégal', '123456789', 'photo_recto1.jpg', 'photo_verso1.jpg'),
('Amadou', 'Diallo', 'amadou.diallo', 'pass456', 1, 'Thies, Sénégal', '987654321', 'photo_recto2.jpg', 'photo_verso2.jpg');

INSERT INTO compte (numeros, typecompte, solde, user_id)
VALUES
('CP-0001', 'Principal', 100000.00, 1),  
('CP-0002', 'Secondaire', 5000.00, 1),   
('CP-0003', 'Secondaire', 7500.00, 1),   
('CP-0004', 'Principal', 25000.00, 2);   

INSERT INTO transaction (montant, date, compte_id, typetransaction, status)
VALUES
(20000.00, '2025-07-19 10:00:00', 1, 'Depos', 'terminer'),
(5000.00, '2025-07-19 11:30:00', 2, 'Retrait', 'terminer'),
(3000.00, '2025-07-19 12:00:00', 3, 'Paiement', 'En_cours'),
(10000.00, '2025-07-19 13:00:00', 4, 'Depos', 'Annuler');
