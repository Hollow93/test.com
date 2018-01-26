<?php

namespace app;

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

    }

    /**
     * @return FtpServer
     */
    public function createFtpServer()
    {

        $server = ftp_connect('217.147.23.154');
        ftp_login($server,'vacancy','vacancy');
        ftp_pasv($server, true);

        return $server;
    }
}
