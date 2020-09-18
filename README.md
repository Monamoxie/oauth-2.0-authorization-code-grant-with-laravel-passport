### OAuth 2.0 - Authorization Grant 

# BRIEF OVERVIEW
Hey, this is me trying to briefly work out a practical implementation of the OAuth 2.0 framework. 

OAuth is simply a token based standardardized authorization framework. The current standard being OAuth 2.0. Primarily, it allows organizations to share resources of a User (the resource owner) with a third party client (known in this case as the Client).

For this, I am using Laravel Passport which is built on top the * League OAuth2 server * maintained by Andy Millington and Simon Hamp. According to the documentation, there are basically 4 ways we can retrieve a token to be used. 

1. Authorization code grant
2. Client credentials grant
3. Implicit grant
4. Resource owner password credentials grant
5. Refresh grant\

For this example, I will be using the Authorization Grant approach. 


## STEPS
