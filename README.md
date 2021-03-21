belajar best practice api with lumen

#token with jwt
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvbG9naW4iLCJpYXQiOjE2MTYyOTU4MzgsImV4cCI6MTYxNjI5OTQzOCwibmJmIjoxNjE2Mjk1ODM4LCJqdGkiOiJONTh3THYwa05qUWNZVHlqIiwic3ViIjoxLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.RT2VamBu0Dv5ua3KumzdYhI4GEJ49mr-PYNaEYvrFOM",
    "token_type": "bearer",
    "expires_in": 3600
}

#response get products
{
    "message": "Success",
    "code": 200,
    "type": "Product",
    "data": [
        {
            "id": 1,
            "name": "Baju batik",
            "price": 100000,
            "category": {
                "id": 1,
                "name": "Pakaian"
            },
            "links": {
                "self": "http://localhost:8000/api/v1/products/1"
            }
        },
        {
            "id": 2,
            "name": "Setrika",
            "price": 80000,
            "category": {
                "id": 2,
                "name": "Perabot rumah"
            },
            "links": {
                "self": "http://localhost:8000/api/v1/products/2"
            }
        }
    ],
    "links": {
        "self": "http://localhost:8000/api/v1/products"
    }
}
