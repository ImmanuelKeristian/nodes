const http = require('http');
const fs = require('fs');
const url = require('url');
const express = require('express');
const app = express();

app.use(express.static('public'));

const server = http.createServer(function (req, res) {
    let q = url.parse(req.url, true);
    let path = q.query;
    let fileLocation;
    switch (path.menu){
        default:
            fileLocation = 'hal/index.blade.php'
            break;
        case 'home':
            fileLocation = 'hal/index.blade.php'
            break;
        case 'kk':
            fileLocation = 'hal/kk/index.blade.php'
            break;
        case 'kk-create':
            fileLocation = 'hal/kk/create.blade.php'
            break;
        case 'kk-edit':
            fileLocation = 'hal/kk/edit.blade.php'
            break;
        case 'ctz':
            fileLocation = 'hal/ctz/index.blade.php'
            break;
        case 'ctz-create':
            fileLocation = 'hal/ctz/create.blade.php'
            break;
        case 'user':
            fileLocation = 'hal/user/index.blade.php'
            break;
        case 'user-create':
            fileLocation = 'hal/user/create.blade.php'
            break;
    }
    
    fs.readFile(fileLocation, (err, data) =>{
        if (err){
            res.writeHead(404, {'Content-type':'text/html'});
            return res.end('404 not Found');
        }
        res.writeHead(200, {'Content-type':'text/html'});
        res.write(data);
        return res.end();
    });
});
server.listen(8000);
