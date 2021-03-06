<?php 
$BearerAuthenticationToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjhjMzg2ZmY2NDIwNTk3NjdhMWZiZTMzMzBhN2IyMjRhYTdiNmVkOThkOTk0OTRiZWQxYmU1MTljZmZmZmMzNjY2ZjQ0NjA0NjJlYWIzM2I3In0.eyJhdWQiOiIxIiwianRpIjoiOGMzODZmZjY0MjA1OTc2N2ExZmJlMzMzMGE3YjIyNGFhN2I2ZWQ5OGQ5OTQ5NGJlZDFiZTUxOWNmZmZmYzM2NjZmNDQ2MDQ2MmVhYjMzYjciLCJpYXQiOjE0NzQ4ODU3MjIsIm5iZiI6MTQ3NDg4NTcyMiwiZXhwIjo0NjMwNTYyOTIyLCJzdWIiOiI1MDEiLCJzY29wZXMiOltdfQ.jIiDxzD8Z-Z_SEANgDgPG0aSqu7yklcjJwG5T9ExEBXEaVzMHg8nGILoQVl5log14ULIzJ4AeEnMvumIA3l76z_mlp34EyVEXkPCAmT97zKBLDmL6P2sYcj4OdJjV_ibEuQhO7lx4KsjTeftcZEvvFXUM0Mol_Flj5K0RMuGDw44we5RGk9pYosxIogVf7GTUqPu2ifUHAMAaUow7jf3UywFiPtdPqmayuoFl_QH6BMNUy5HkUsYkSP-IYI-HWg16X_mJjD07EIIidfEFhAbzr9tp0vrhMqH8T9d-Mdzov_5TS8XqixS8i4b85qP02VsVAj_0zJoitFrKa8R9-8ZpfIjtf4uPVGw_OPYLbKc5uVy-FX4QkouP7tXdBpVkXF_WhyuAo_LPgVeGHG6gDL8-jjYIJOZQF6nNEwk-SrSSiShesKdWtoMFwY1AaD0YiZLx4mw44bCgAbOwWQpsVNAf3hNyNe_NkbVNh5McqgFcs0_Gl8tXKqo0uMVGN4XdrROBWFhd0couEJppLrGaxKqiEYjecARMZW7d5_aO753FBsQ7s69Vd5LUUDo1bqcKKZzFQagICjDWoEwEBv7QkyB_KxBQsebDI04dBhutlUfzA5iqxqs9yRDd7s4u4JMXjJKecoSwr2WgvT9hDTNpbwG7A1Bj0OoXvAgNiSKT0Ae1l4';

$I = new ApiTester($scenario);

$I->am('a regular user');
$I->wantTo('view all of my machines');

$I->amBearerAuthenticated($BearerAuthenticationToken);

$I->haveHttpHeader('X-Requested-With', 'Codeception');

$I->sendGET('/supportdesk/machine');
$I->canSeeResponseCodeIs(200);

$I->canSeeResponseMatchesJsonType();
