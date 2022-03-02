<?php


class DB
{
    private string $server;
    private string $user;
    private string $password;
    private string $dbName;

    public function __construct(){
        $this->setServer('localhost');
        $this->setUser('root');
        $this->setPassword('');
        $this->setDbName('micro_blog');
    }

    /**
     * @return string
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * @param string $server
     */
    public function setServer(string $server): void
    {
        $this->server = $server;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDbName(): string
    {
        return $this->dbName;
    }

    /**
     * @param string $dbName
     */
    public function setDbName(string $dbName): void
    {
        $this->dbName = $dbName;
    }

    /**
     * db connection
     */
    public function conn () : ?PDO {
        try {
            $conn = new PDO("mysql:host=".$this->server.";dbname=".$this->dbName.";charset=utf8", $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            return $conn;
        }
        catch (PDOException $e){
            echo "Error : " . $e->getMessage();
        }
        return null;
    }
}
