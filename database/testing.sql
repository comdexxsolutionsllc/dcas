SQLite format 3   @     $   $                                                            $ -�   �    #�����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            	   � ��p9��e4��                                                                                                                                                                                                                                                                                                                                                                                                                 *[	2016_09_05_030714_create_sessions_table&S	2016_09_05_030709_create_jobs_table-
a	2016_09_05_030701_create_failed_jobs_table/	e	2016_09_05_030649_create_notifications_table'U	2016_09_05_030643_create_cache_table@�	2016_06_01_000005_create_oauth_personal_access_clients_table/e	2016_06_01_000004_create_oauth_clients_table6s	2016_06_01_000003_create_oauth_refresh_tokens_table5q	2016_06_01_000002_create_oauth_access_tokens_table2k	2016_06_01_000001_create_oauth_auth_codes_table1i	2014_10_12_100000_create_password_resets_table'U	2014_10_12_000000_create_users_table                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ,  , ���]�}                      s!!�1tablemigrationsmigrationsCREATE TABLE "migrations" ("migration" varchar not null, "batch" integer not null)��gtableusersusersCREATE TABLE "users" ("id" integer not null primary key autoincrement, "name" varchar not null, "email" varchar not null, "password" varchar not null, "remember_token" varchar null, "created_at" datetime null, "updated_at" datetime null)P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)a1�indexusers_email_uniqueusersCREATE UNIQUE INDEX "users_email_unique" on "users" ("email")�++�ktablepassword_resetspassword_resetsCREATE TABLE "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime null)� C+�indexpassword_resets_email_indexpassword_resetsCREATE INDEX "password_resets_email_index" on "password_resets" ("email")� C+�indexpassword_resets_token_indexpassword_resetsCREATE INDEX "password_resets_token_index" on "password_resets" ("token")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  �  ��� g                                                                                                                   �--�5tableoauth_auth_codesoauth_auth_codes
CREATE TABLE "oauth_auth_codes" ("id" varchar not null, "user_id" integer not null, "client_id" integer not null, "scopes" text null, "revoked" tinyint(1) not null, "expires_at" datetime null, primary key ("id"))?	S- indexsqlite_autoindex_oauth_auth_codes_1oauth_auth_codes�S
33�Mtableoauth_access_tokensoauth_access_tokensCREATE TABLE "oauth_access_tokens" ("id" varchar not null, "user_id" integer null, "client_id" integer not null, "name" varchar null, "scopes" text null, "revoked" tinyint(1) not null, "created_at" datetime null, "updated_at" datetime null, "expires_at" datetime null, primary key ("id"))EY3 indexsqlite_autoindex_oauth_access_tokens_1oauth_access_tokens�O3�7indexoauth_access_tokens_user_id_indexoauth_access_tokensCREATE INDEX "oauth_access_tokens_user_id_index" on "oauth_access_tokens" ("user_id")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �A���c55�itableoauth_refresh_tokensoauth_refresh_tokensCREATE TABLE "oauth_refresh_tokens" ("id" varchar not null, "access_token_id" varchar not null, "revoked" tinyint(1) not null, "expires_at" datetime null, primary key ("id"))G[5 indexsqlite_autoindex_oauth_refresh_tokens_1oauth_refresh_tokens�2a5�[indexoauth_refresh_tokens_access_token_id_indexoauth_refresh_tokensCREATE INDEX "oauth_refresh_tokens_access_token_id_index" on "oauth_refresh_tokens" ("access_token_id")�''�Mtableoauth_clientsoauth_clientsCREATE TABLE "oauth_clients" ("id" integer not null primary key autoincrement, "user_id" integer null, "name" varchar not null, "secret" varchar not null, "redirect" text not null, "personal_access_client" tinyint(1) not null, "password_client" tinyint(1) not null, "revoked" tinyint(1) not null, "created_at" datetime null, "updated_at" datetime null)~C'�indexoauth_clients_user_id_indexoauth_clientsCREATE INDEX "oauth_clients_user_id_index" on "oauth_clients" ("user_id")
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                +  +)�l�                         �{GG�utableoauth_personal_access_clientsoauth_personal_access_clientsCREATE TABLE "oauth_personal_access_clients" ("id" integer not null primary key autoincrement, "client_id" integer not null, "created_at" datetime null, "updated_at" datetime null)�DgG�gindexoauth_personal_access_clients_client_id_indexoauth_personal_access_clientsCREATE INDEX "oauth_personal_access_clients_client_id_index" on "oauth_personal_access_clients" ("client_id")z�StablecachecacheCREATE TABLE "cache" ("key" varchar not null, "value" text not null, "expiration" integer not null)Z-indexcache_key_uniquecacheCREATE UNIQUE INDEX "cache_key_unique" on "cache" ("key")�5''�)tablenotificationsnotificationsCREATE TABLE "notifications" ("id" varchar not null, "type" varchar not null, "notifiable_id" integer not null, "notifiable_type" varchar not null, "data" text not null, "read_at" datetime null, "created_at" datetime null, "updated_at" datetime null, primary key ("id"))
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  �  ���                                                                                                                                                                                                                    9M' indexsqlite_autoindex_notifications_1notifications�Co'�}indexnotifications_notifiable_id_notifiable_type_indexnotificationsCREATE INDEX "notifications_notifiable_id_notifiable_type_index" on "notifications" ("notifiable_id", "notifiable_type")�##�etablefailed_jobsfailed_jobsCREATE TABLE "failed_jobs" ("id" integer not null primary key autoincrement, "connection" text not null, "queue" text not null, "payload" text not null, "exception" text not null, "failed_at" datetime default CURRENT_TIMESTAMP not null)��otablejobsjobs CREATE TABLE "jobs" ("id" integer not null primary key autoincrement, "queue" varchar not null, "payload" text not null, "attempts" integer not null, "reserved_at" integer null, "available_at" integer not null, "created_at" integer not null)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               H �+H                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          d1�indexsessions_id_uniquesessions$CREATE UNIQUE INDEX "sessions_id_unique" on "sessions" ("id"){E�)indexjobs_queue_reserved_at_indexjobs!CREATE INDEX "jobs_queue_reserved_at_index" on "jobs" ("queue", "reserved_at")�R�wtablesessionssessions"CREATE TABLE "sessions" ("id" varchar not null, "user_id" integer null, "ip_address" varchar null, "user_agent" text null, "payload" text not null, "last_activity" integer not null)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              