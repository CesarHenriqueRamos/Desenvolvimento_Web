<?php
    namespace Cesar\Socket;

    use Ratchet\MessageComponentInterface;
    use Ratchet\ConnectionInterface;

    class Chat implements MessageComponentInterface {
        protected $user;
        public function __construct(){
            $this->$user = new \SplObjectStorage;
        }
        public function onOpen(ConnectionInterface $conn) {
            $this->$user->attach($conn);
            echo "New Connection!({$conn->resourceId})\n";
        }

        public function onMessage(ConnectionInterface $from, $msg) {
            foreach($this->$user as $client){
                if($from !== $client){
                    $client->send($msg);
                }
            }
        }

        public function onClose(ConnectionInterface $conn) {
            $this->$user->detach($conn);
            echo "Connection {$conn->resourceId} Has Disconnection\n";
        }

        public function onError(ConnectionInterface $conn, \Exception $e) {
            echo "An Erro has occured:{$e->getMessage()}\n";
            $conn->close();
        }
    }
?>