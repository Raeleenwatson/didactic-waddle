create table posts (
	id int(11) not null auto_increment primary key,
	author text not null,
	message text not null
);


insert into comments (author, message) values ('Daniel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus dui quis dapibus convallis. Duis tincidunt metus et erat efficitur, id rutrum purus vestibulum.');

insert into comments (author, message) values ('John', 'Maecenas enim nunc, euismod vitae aliquet et, euismod ornare libero. Nam egestas laoreet neque, sit amet cursus purus hendrerit sed.');

insert into comments (author, message) values ('Daniel', 'Mauris lobortis finibus nisl, non eleifend urna condimentum eu.');

insert into comments (author, message) values ('Jane', 'Fusce vel neque id augue faucibus ultricies. Mauris lobortis finibus nisl, non eleifend urna condimentum eu. Curabitur mollis aliquam fringilla. Sed tortor ante, sagittis vel leo ut, finibus auctor lectus.');

insert into comments (author, message) values ('Daniel', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque imperdiet ultrices nisi id accumsan. Praesent nec accumsan odio.');

insert into comments (author, message) values ('John', 'Aenean mauris lacus, semper quis est ac, rutrum viverra neque.');