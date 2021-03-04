--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: acudiente; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE acudiente (
    cedula_acudiente character varying(15) NOT NULL,
    nombre_acudiente character varying(30) NOT NULL,
    apellido_acudiente character varying(30) NOT NULL,
    edad_acudiente character varying(30) NOT NULL,
    telefono_acudiente character varying(30) NOT NULL,
    direccion_acudiente character varying(30) NOT NULL,
    clave_acudiente character varying(15),
    login_acudiente character varying(15)
);


ALTER TABLE public.acudiente OWNER TO postgres;

--
-- Name: ninera; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ninera (
    cedula_ninera character varying(30) NOT NULL,
    nombre_ninera character varying(30) NOT NULL,
    edad_ninera integer NOT NULL,
    telefono_ninera character varying(30) NOT NULL,
    email_ninera character varying(30) NOT NULL,
    dia_disponible_ninera character varying(20) NOT NULL,
    clave_ninera character varying(15),
    login_ninera character varying(15)
);


ALTER TABLE public.ninera OWNER TO postgres;

--
-- Name: nino; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE nino (
    tidentidad_nino character varying(30) NOT NULL,
    nombre_nino character varying(30) NOT NULL,
    apellido_nino character varying(30) NOT NULL,
    edad_nino integer NOT NULL,
    descripcion_nino character varying(30) NOT NULL,
    fk_cedula_acudiente character varying(30) NOT NULL
);


ALTER TABLE public.nino OWNER TO postgres;

--
-- Name: solicitud; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE solicitud (
    codigo_solicitud integer NOT NULL,
    dia_solicitud character varying(30) NOT NULL,
    tipo_servicio character varying(30) NOT NULL,
    fk_identidad_nino character varying(30) NOT NULL,
    fk_cedula_ninera character varying(30) NOT NULL,
    fk_cedula_acudiente character varying(30) NOT NULL
);


ALTER TABLE public.solicitud OWNER TO postgres;

--
-- Data for Name: acudiente; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO acudiente VALUES ('124', 'Hector', 'Gonzalez', '44', '6532145', 'calle 14', '123', 'hector');
INSERT INTO acudiente VALUES ('215', 'Mauren', 'Cobos', '30', '6589741', 'calle 40', '123456', 'mauren');
INSERT INTO acudiente VALUES ('356', 'Ivon', 'Becerra', '28', '6302145', 'calle 2', '12345', 'ivon');
INSERT INTO acudiente VALUES ('896', 'Lucia', 'Fernandez', '32', '6302145', 'carrera 5', '123', 'lucia');
INSERT INTO acudiente VALUES ('596', 'Lina', 'Paredes', '41', '6302175', 'carrera 20', '1234', 'lina');


--
-- Data for Name: ninera; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ninera VALUES ('789', 'Luisa', 26, '6532145', 'luisa@gmail.com', '2020-04-16', '1234', 'luisa');
INSERT INTO ninera VALUES ('256', 'Angie', 28, '6532112', 'angie@gmail.com', '2020-04-18', '12345', 'angie');
INSERT INTO ninera VALUES ('258', 'Daniela', 30, '6252112', 'daniela@gmail.com', '2020-04-18', '123456', 'daniela');
INSERT INTO ninera VALUES ('369', 'Carla', 31, '6214112', 'carla@gmail.com', '2020-04-22', '1234', 'carla');
INSERT INTO ninera VALUES ('314', 'Camila', 24, '6286212', 'camila@gmail.com', '2020-04-10', '1234', 'camila');


--
-- Data for Name: nino; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO nino VALUES ('245', 'Samuel', 'Santos', 10, 'Secundaria', '124');
INSERT INTO nino VALUES ('236', 'Alejandro', 'Yate', 4, 'Guarderia', '215');
INSERT INTO nino VALUES ('182', 'Maria', 'Cardenas', 6, 'Primaria', '356');
INSERT INTO nino VALUES ('137', 'Laura', 'Castellanos', 9, 'Primaria', '896');
INSERT INTO nino VALUES ('152', 'Salome', 'Miranda', 9, 'Primaria', '596');


--
-- Data for Name: solicitud; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO solicitud VALUES (1, '2020-04-15', 'Recurrente', '245', '789', '124');
INSERT INTO solicitud VALUES (256, '2020-04-09', 'Esporadico', '236', '256', '215');
INSERT INTO solicitud VALUES (234, '2020-04-09', 'Esporadico', '182', '258', '356');
INSERT INTO solicitud VALUES (863, '2020-04-09', 'Esporadico', '137', '369', '896');
INSERT INTO solicitud VALUES (125, '2020-04-15', 'Esporadico', '152', '314', '596');
INSERT INTO solicitud VALUES (589, '2020-04-09', 'Esporadico', '182', '258', '596');


--
-- Name: acudiente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY acudiente
    ADD CONSTRAINT acudiente_pkey PRIMARY KEY (cedula_acudiente);


--
-- Name: ninera_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ninera
    ADD CONSTRAINT ninera_pkey PRIMARY KEY (cedula_ninera);


--
-- Name: nino_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY nino
    ADD CONSTRAINT nino_pkey PRIMARY KEY (tidentidad_nino);


--
-- Name: solicitud_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT solicitud_pkey PRIMARY KEY (codigo_solicitud);


--
-- Name: nino_fk_cedula_acudiente_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY nino
    ADD CONSTRAINT nino_fk_cedula_acudiente_fkey FOREIGN KEY (fk_cedula_acudiente) REFERENCES acudiente(cedula_acudiente) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: solicitud_fk_cedula_acudiente_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT solicitud_fk_cedula_acudiente_fkey FOREIGN KEY (fk_cedula_acudiente) REFERENCES acudiente(cedula_acudiente) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: solicitud_fk_cedula_ninera_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT solicitud_fk_cedula_ninera_fkey FOREIGN KEY (fk_cedula_ninera) REFERENCES ninera(cedula_ninera) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: solicitud_fk_tindentidad_nino_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT solicitud_fk_tindentidad_nino_fkey FOREIGN KEY (fk_identidad_nino) REFERENCES nino(tidentidad_nino) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

