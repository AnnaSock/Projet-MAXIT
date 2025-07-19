INSERT INTO profil (nom_profil) VALUES
('Client'),               
('Service commercial');  


INSERT INTO utilisateurs (nom, prenom, adresse, numero, motDePasse, numeroCni, photoRecto, photoVerso, profil_id)
VALUES
('SocK', 'Anna', 'Dakar, Sénégal', 770000001, 'passer123', 123456789, 'photo_recto1.jpg', 'photo_verso1.jpg', 1), 
('Wane', 'Baila', 'Thies, Sénégal', 770000002, 'pass456', 987654321, 'photo_recto2.jpg', 'photo_verso2.jpg', 2);  


INSERT INTO compte (solde, numero, date, typeCompte, utilisateur_id)
VALUES
(100000.00, 'CP-0001', '2025-07-19', 'Principal', 1),
(5000.00, 'CP-0002', '2025-07-19', 'Secondaire', 1),
(7500.00, 'CP-0003', '2025-07-19', 'Secondaire', 1),
(25000.00, 'CP-0004', '2025-07-19', 'Principal', 2);



INSERT INTO transaction (montant, date, compte_id, typeTransaction)
VALUES
(20000.00, '2025-07-19 10:00:00', 1, 'Depot'),
(5000.00, '2025-07-19 11:30:00', 2, 'Retrait'),
(3000.00, '2025-07-19 12:00:00', 3, 'Payement'),
(10000.00, '2025-07-19 13:00:00', 4, 'Depot');






