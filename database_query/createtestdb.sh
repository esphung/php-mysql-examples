# create test db called TEST
testdb="TEST";
echo $testdb" db created";
dropdb $testdb;
createdb $testdb;