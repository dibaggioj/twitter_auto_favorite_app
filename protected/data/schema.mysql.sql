CREATE TABLE twitter_users (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL,
    oauth_token VARCHAR(128) NOT NULL,
    oauth_token_secret VARCHAR(128) NOT NULL,
    searchtag1 VARCHAR(128) NOT NULL,
    searchtag2 VARCHAR(128) NOT NULL,
    searchtag3 VARCHAR(128) NOT NULL,
    searchtag4 VARCHAR(128) NOT NULL,
    searchtag5 VARCHAR(128) NOT NULL,
    searchtag6 VARCHAR(128) NOT NULL
);

INSERT INTO twitter_users (username, password, email, oauth_token, oauth_token_secret, searchtag1, searchtag2, searchtag3, searchtag4, searchtag5, searchtag6) VALUES ('test1', 'pass1', 'test1@example.com', '123abc', '456def', 'examplesearch1a', 'examplesearch2a', 'examplesearch3a', 'examplesearch4a', 'examplesearch5a', 'examplesearch6a');
INSERT INTO twitter_users (username, password, email, oauth_token, oauth_token_secret, searchtag1, searchtag2, searchtag3, searchtag4, searchtag5, searchtag6) VALUES ('test2', 'pass2', 'test2@example.com', '789ghi', '012jkl', 'examplesearch1b', 'examplesearch2b', 'examplesearch3b', 'examplesearch4b', 'examplesearch5b', 'examplesearch6b');
INSERT INTO twitter_users (username, password, email, oauth_token, oauth_token_secret, searchtag1, searchtag2, searchtag3, searchtag4, searchtag5, searchtag6) VALUES ('test3', 'pass3', 'test3@example.com', '345mno', '678pqr', 'examplesearch1c', 'examplesearch2c', 'examplesearch3c', 'examplesearch4c', 'examplesearch5c', 'examplesearch6c');


CREATE TABLE twitter_searchtags (
    searchtag VARCHAR(128) NOT NULL,
);

INSERT INTO twitter_searchtags (searchtag) VALUES ('searchtagnumber1');
INSERT INTO twitter_searchtags (searchtag) VALUES ('searchtagnumber2');
INSERT INTO twitter_searchtags (searchtag) VALUES ('searchtagnumber3');
INSERT INTO twitter_searchtags (searchtag) VALUES ('searchtagnumber4');
INSERT INTO twitter_searchtags (searchtag) VALUES ('searchtagnumber5');