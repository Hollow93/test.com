<?php

namespace app;

//use altayalp\FtpClient\Servers\FtpServer;
//use altayalp\FtpClient\FileFactory;

class Application
{
    public function getXml()
    {
        return simplexml_load_file('test.xml');
    }

    public function downloadFtpFile()
    {



        $server = $this->createFtpServer();
        ftp_get($server,'test.xml', 'test.xml', FTP_BINARY);
        ftp_close($server);
//
//        $file = FileFactory::build($server);
//        $file->download('test.xml', 'test.xml');
    }

    /**
     * @return FtpServer
     */
    public function createFtpServer()
    {

        $server = ftp_connect('217.147.23.154');
        ftp_login($server,'vacancy','vacancy');
        ftp_pasv($server, true);



//        $server = new FtpServer('217.147.23.154');
//        $server->login('vacancy', 'vacancy');
//        $server->turnPassive();

        return $server;
    }
}
