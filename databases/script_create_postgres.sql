CREATE TYPE public.type_transaction_enum AS ENUM
    ('Depot', 'Retrait', 'Payement');

CREATE TYPE public.type_compte_enum AS ENUM
    ('Principal', 'Secondaire');


CREATE TABLE IF NOT EXISTS public.profil
(
    id integer NOT NULL DEFAULT nextval('profil_id_seq'::regclass),
    nom_profil character varying(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT profil_pkey PRIMARY KEY (id)
)

CREATE TABLE IF NOT EXISTS public.utilisateurs
(
    id integer NOT NULL DEFAULT nextval('utilisateur_id_seq'::regclass),
    nom character varying(100) COLLATE pg_catalog."default" NOT NULL,
    prenom character varying(100) COLLATE pg_catalog."default" NOT NULL,
    adresse text COLLATE pg_catalog."default",
    numero integer,
    "motDePasse" text COLLATE pg_catalog."default",
    "numeroCni" integer,
    "photoRecto" text COLLATE pg_catalog."default",
    "photoVerso" text COLLATE pg_catalog."default",
    profil_id integer,
    CONSTRAINT utilisateur_pkey PRIMARY KEY (id)
)


CREATE TABLE IF NOT EXISTS public.compte
(
    id integer NOT NULL DEFAULT nextval('compte_id_seq'::regclass),
    solde numeric(12,2) DEFAULT 0,
    numero character varying(50) COLLATE pg_catalog."default" NOT NULL,
    date date,
    "typeCompte" type_compte_enum,
    utilisateur_id integer,
    CONSTRAINT compte_pkey PRIMARY KEY (id),
    CONSTRAINT compte_numero_key UNIQUE (numero)
)


CREATE TABLE IF NOT EXISTS public.transaction
(
    id integer NOT NULL DEFAULT nextval('transaction_id_seq'::regclass),
    montant numeric(12,2) NOT NULL,
    date timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    compte_id integer,
    "typeTransaction" type_transaction_enum,
    CONSTRAINT transaction_pkey PRIMARY KEY (id)
)
