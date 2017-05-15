
CREATE DATABASE "AirlineReservation"
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'English_United States.1252'
    LC_CTYPE = 'English_United States.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;


CREATE TABLE public.admin
(
    admin_id integer NOT NULL,
    "user" character(32)[] COLLATE pg_catalog."default" NOT NULL,
    salt character(50) COLLATE pg_catalog."default" NOT NULL,
    salted_pass character(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT admin_pkey PRIMARY KEY (admin_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.admin
    OWNER to postgres;

-- Table: public.aircraft

-- DROP TABLE public.aircraft;

CREATE TABLE public.aircraft
(
    acid integer NOT NULL,
    acnumri character varying(32) COLLATE pg_catalog."default" NOT NULL,
    kapaciteti integer NOT NULL,
    kompaniaprodhuese character varying(128) COLLATE pg_catalog."default" NOT NULL,
    dataprodhimit date NOT NULL,
    CONSTRAINT aircraft_pkey PRIMARY KEY (acid)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.aircraft
    OWNER to postgres;
-- Table: public.denimet

-- DROP TABLE public.denimet;

CREATE TABLE public.denimet
(
    id_denimit integer NOT NULL,
    titulli character varying(30) COLLATE pg_catalog."default",
    perqindja numeric NOT NULL,
    pershkrimi text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT denimet_pkey PRIMARY KEY (id_denimit)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.denimet
    OWNER to postgres;














CREATE TABLE public.orari_fluturimeve
(
    data_fluturimit date NOT NULL,
    nisja abstime NOT NULL,
    mberritja abstime NOT NULL,
    aircraft_id integer NOT NULL,
    cmimi_id integer NOT NULL,
    id_fluturimi integer NOT NULL,
    CONSTRAINT orari_fluturimeve_pkey PRIMARY KEY (id_fluturimi),
    CONSTRAINT orari_fluturimeve_aircraft_id_fkey FOREIGN KEY (aircraft_id)
        REFERENCES public.aircraft (acid) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT orari_fluturimeve_cmimi_id_fkey FOREIGN KEY (cmimi_id)
        REFERENCES public.qmimi_tiketave (id_qmimi) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.orari_fluturimeve
    OWNER to postgres;




CREATE TABLE public.pagesa
(
    id_pagesa integer NOT NULL,
    transaksioni integer,
    lloji_pageses character(30) COLLATE pg_catalog."default",
    data_pagese date,
    CONSTRAINT pagesa_pkey PRIMARY KEY (id_pagesa),
    CONSTRAINT pagesa_transaksioni_fkey FOREIGN KEY (transaksioni)
        REFERENCES public.transaksioni (transaksioni_id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.pagesa
    OWNER to postgres;


-- Table: public.pasagjeret

-- DROP TABLE public.pasagjeret;

CREATE TABLE public.pasagjeret
(
    pasagjeri_id integer NOT NULL,
    emri character varying(32) COLLATE pg_catalog."default" NOT NULL,
    mbiemri character varying(32) COLLATE pg_catalog."default",
    datelindja date NOT NULL,
    gjinia character varying(10) COLLATE pg_catalog."default",
    nrpersonal integer,
    email character varying(30) COLLATE pg_catalog."default",
    CONSTRAINT pasagjeret_pkey PRIMARY KEY (pasagjeri_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.pasagjeret
    OWNER to postgres;



-- Table: public.puntoret

-- DROP TABLE public.puntoret;

CREATE TABLE public.puntoret
(
    id_puntrit integer NOT NULL,
    emri character varying(30) COLLATE pg_catalog."default" NOT NULL,
    mbiemri character varying(30) COLLATE pg_catalog."default" NOT NULL,
    address character varying(30) COLLATE pg_catalog."default",
    pozita character varying(35) COLLATE pg_catalog."default" NOT NULL,
    email character varying(30) COLLATE pg_catalog."default",
    telfoni bigint,
    CONSTRAINT puntoret_pkey PRIMARY KEY (id_puntrit)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.puntoret
    OWNER to postgres;


-- Table: public.qmimi_tiketave

-- DROP TABLE public.qmimi_tiketave;

CREATE TABLE public.qmimi_tiketave
(
    id_qmimi integer NOT NULL,
    id_route integer NOT NULL,
    qmimi money,
    CONSTRAINT qmimi_tiketave_pkey PRIMARY KEY (id_qmimi),
    CONSTRAINT qmimi_tiketave_id_route_fkey FOREIGN KEY (id_route)
        REFERENCES public.route (rtid) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.qmimi_tiketave
    OWNER to postgres;


-- Table: public.route

-- DROP TABLE public.route;

CREATE TABLE public.route
(
    rtid integer NOT NULL,
    airoporti character varying(32) COLLATE pg_catalog."default" NOT NULL,
    destinacioni character varying(32) COLLATE pg_catalog."default" NOT NULL,
    routecode character varying(16) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT route_pkey PRIMARY KEY (rtid),
    CONSTRAINT route_routecode_key UNIQUE (routecode)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.route
    OWNER to postgres;


-- Table: public.shteti

-- DROP TABLE public.shteti;

CREATE TABLE public.shteti
(
    shteti_id integer NOT NULL,
    emri character varying(32) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT shteti_pkey PRIMARY KEY (shteti_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.shteti
    OWNER to postgres;


-- Table: public.shteti

-- DROP TABLE public.shteti;

CREATE TABLE public.shteti
(
    shteti_id integer NOT NULL,
    emri character varying(32) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT shteti_pkey PRIMARY KEY (shteti_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.shteti
    OWNER to postgres;

-- Table: public.zbritja

-- DROP TABLE public.zbritja;

CREATE TABLE public.zbritja
(
    id_zbritja integer NOT NULL,
    titulli character varying(30) COLLATE pg_catalog."default",
    perqindja numeric NOT NULL,
    pershkrimi text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT zbritja_pkey PRIMARY KEY (id_zbritja)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.zbritja
    OWNER to postgres;