ALTER TABLE ela_staydid add `PhoneNumbers` varchar(2000) default null;
ALTER table ela_staydid CHANGE PhoneNumbers PhoneNumber varchar(2000);
ALTER TABLE ela_staydid add `email` varchar(100) default null;