CREATE DATABASE IF NOT EXISTS alien;

USE alien;

CREATE TABLE IF NOT EXISTS personalInformation (
    IDpersonal INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(35) NOT NULL,
    lname VARCHAR(35) NOT NULL,
    dayBirth INT(2),
    monthBirth INT(2),
    yearBirth INT(4),
    email VARCHAR(255),
    phone VARCHAR(25),
    streetAddress VARCHAR(60),
    city VARCHAR(30),
    stateAddress VARCHAR(2),
    zip VARCHAR(10),
    country VARCHAR(30)
);

/* Tyler Bendele, Michael Min, Megan Sanderson */
/* These are to get preliminary details about the report itself and not the specifics of the report to avoid empty cells */
CREATE TABLE IF NOT EXISTS incidentReport (
    IDreport INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    /* Date of occurence */
    dayOccur INT(2),
    monthOccur INT(2),
    yearOccur INT(4),
    /* Location of occurence */
    streetOccur VARCHAR(60),
    cityOccur VARCHAR(30),
    stateOccur VARCHAR(2),
    zipOccur VARCHAR(10),
    countryOccur VARCHAR(30),
    /* Content of report */
        /* Type of encounter */
    classEncounter INT(1),
        /* Classify encounter as H (hostile), N (neutral), F (friendly), or X (not applicable) */
    threatEncounter VARCHAR(1),
    /* Are there other people who concur? */
    corroborated BIT NOT NULL,
    /* Condition of reporter */
    usingPsychedelics BIT NOT NULL,
    (IDpersonal),
    FOREIGN KEY IDpersonal REFERENCES personalInformation(IDpersonal)
);

/* Only seeing */
CREATE TABLE IF NOT EXISTS classOneReport (
    IDclassOne INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    inVehicle BIT NOT NULL,
    /* Classify type of vehicle: FL (flying), GR (grounded), SW (swimming), or NA (not appicable) */
    typeOfVehicle VARCHAR(2) NOT NULL,
    additionalDetails TEXT,

    FOREIGN KEY (IDreport) REFERENCES incidentReport(IDreport)
);

/* Physical effect */
CREATE TABLE IF NOT EXISTS classTwoReport (
    IDclassTwo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    inVehicle BIT NOT NULL,
    /* Classify type of vehicle: FL (flying), GR (grounded), SW (swimming), or NA (not appicable) */
    typeOfVehicle VARCHAR(2) NOT NULL,
    /* Is there harm done to the following things: */
    personHarmDone BIT NOT NULL,
    environmentHarmDone BIT NOT NULL,
    /* Is there a trace left behind? If so, what is it? */
    physicalTrace BIT NOT NULL,
    descriptionOfTrace TEXT,
    additionalDetails TEXT,

    FOREIGN KEY (IDreport) REFERENCES incidentReport(IDreport)
);

/* Actual creatures */
CREATE TABLE IF NOT EXISTS classThreeReport (
    IDclassThree INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    inVehicle BIT NOT NULL,
    /* Classify type of vehicle: FL (flying), GR (grounded), SW (swimming), or NA (not appicable) */
    typeOfVehicle VARCHAR(2) NOT NULL,
    personHarmDone BIT NOT NULL,
    environmentHarmDone BIT NOT NULL,
    physicalTrace BIT NOT NULL,
    descriptionOfTrace TEXT,

    /* Describing alien */
    /* Describe creature; a simple 'X' in the field means it is inapplicable */
    colorCreature VARCHAR(20) NOT NULL,
    numLegsStandingOn INT(2) NOT NULL,
        /* Animal closest in appeareance to the creature */
    closestAnimal VARCHAR(25) NOT NULL,
    otherAppendages VARCHAR(25) NOT NULL,
        /* In comparison to an average human */
    alienSize VARCHAR (20) NOT NULL,
    numEyes INT(2) NOT NULL,

    /* Describe report in reference to creatures*/
    abducted BIT,
    toOffWorld BIT,
    timeGone VARCHAR(20),
    howManyCreatures INT(4),
    additionalDetails TEXT,
    IDreport INT NOT NULL,
    FOREIGN KEY (IDreport) REFERENCES incidentReport(IDreport)
);

