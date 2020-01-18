# doctrine-issue3828
Reference to the issue 3828 of doctrine

1. composer update

2. init .env file with a empty mysql database (bug should occur with any database type)

3. php bin/console doctrine:migration:diff

Result :

In SchemaException.php line 68:
                                                                                      
  An index with name 'uniq_19653dbdbf396750' was already defined on table 'societe'.  
                                                                                      

doctrine:migrations:diff [--configuration [CONFIGURATION]] [--db-configuration [DB-CONFIGURATION]] [--editor-cmd [EDITOR-CMD]] [--filter-expression [FILTER-EXPRESSION]] [--formatted] [--line-length [LINE-LENGTH
]] [--check-database-platform [CHECK-DATABASE-PLATFORM]] [--allow-empty-diff] [--db DB] [--em [EM]] [--shard SHARD] [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-in
teraction] [-e|--env ENV] [--no-debug] [--] <command>
