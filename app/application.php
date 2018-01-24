<?php

namespace app;

use altayalp\FtpClient\Servers\FtpServer;
use altayalp\FtpClient\FileFactory;

class Application
{
    public function getXml()
    {
        return simplexml_load_file('test.xml');
    }

    public function downloadFtpFile()
    {
        $server = $this->createFtpServer();

        $file = FileFactory::build($server);
        $file->download('test.xml', 'test.xml');
    }

    /**
     * @return FtpServer
     */
    public function createFtpServer()
    {
        $server = new FtpServer('217.147.23.154');
        $server->login('vacancy', 'vacancy');
        $server->turnPassive();

        return $server;
    }
}
