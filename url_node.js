const http = require('http');
const url = require('url');
const browserUrl = 'http://contoh.com/main?userId=256&lang=en';

const server = http.createServer(function (req, res) {
    let browserDetail = url.parse(browserUrl);
    console.log(browserUrl);
    console.log(browserDetail.host);
    console.log(browserDetail.pathname);
    console.log(browserDetail.search);
    res.end();
});
server.listen(8000);
