
# Tic Tac Toe

#### Prerequisites

- PHP >= 7.1
- Nginx / Apache


#### Steps to Setup

- Your API URL will become like: http://localhost/tic-tac-toe/v1
- Now you are ready to test your web by opening http://localhost/tic-tac-toe/public/index.html



## API Documentation

### To get matrix size for game

Request URL: http://localhost/tic-tac-toe/v1/matrix [GET]

Response: 
```
3
```

### To take move and get bot move

Request URL: http://localhost/tic-tac-toe/v1/move [POST]

Request Body:
```
{
  "boardState":[["O","","X"],["","","O"],["","X",""]],
  "playerUnit": "X"
}
```

Response:
```
[1,1,"O"]
```

