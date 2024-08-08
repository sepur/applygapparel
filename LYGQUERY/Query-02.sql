
-- Buat tabel lygDestination
CREATE TABLE lygDestination (
    DestinationCode VARCHAR(20) NOT NULL,
    DestinationName VARCHAR(50) DEFAULT NULL,  -- Mengizinkan nilai NULL
    CreatedDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (DestinationCode) 
);

-- Buat tabel lygStyleSize
CREATE TABLE lygStyleSize (
    StyleCode VARCHAR(50) NOT NULL,
    SizeSort VARCHAR(50) NOT NULL,
    SizeName VARCHAR(50) NOT NULL,
    CreatedDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (StyleCode, SizeSort, SizeName) 
);

-- Buat tabel lygSewingOutput
CREATE TABLE lygSewingOutput (
    TrnDate DATE,
    OperatorName VARCHAR(50) NOT NULL,
    StyleCode VARCHAR(50) NOT NULL,
    SizeName VARCHAR(10) NOT NULL,
    DestinationCode VARCHAR(20) NOT NULL,
    QtyOutput INTEGER DEFAULT NULL,
    PRIMARY KEY (TrnDate, OperatorName, StyleCode, SizeName, DestinationCode)
);

