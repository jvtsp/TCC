#!/bin/sh
URL='https://osbdo.ddns.net/zabbix/api_jsonrpc.php'
HEADER='Content-Type:application/json'

USER='"Admin"'
PASS='"impacta"'

USUARIO(){ 
	cat /usr/lib/cgi-bin/newusers.txt | cut -d ':' -f 1 | tr "\";" " " 
}

SENHA(){ 
	cat /usr/lib/cgi-bin/newusers.txt | cut -d ':' -f 2 | tr "\";" " " 
} 

autenticacao()
{
	JSON='
	{
		"jsonrpc": "2.0",
		"method": "user.login",
		"params": {
			"user": '$USER',
			"password": '$PASS'
		},
		"id": 0
	}
	'
	curl -s -X POST -H "$HEADER" -d "$JSON" "$URL" | cut -d '"' -f8
}


TOKEN=$(autenticacao)
ZUSER=$(USUARIO)
ZPASS=$(SENHA)


usercreate()
{
	JSON='
	{
	"jsonrpc": "2.0",
	"method": "user.create",
	"params": {
		"alias": "'$ZUSER'",
		"passwd": "'$ZPASS'",
		"usrgrps": [{
			"usrgrpid": "7"
		}]
	},
	"auth": "'$TOKEN'",
	"id": 1
	}
	'
	curl -s -X POST -H "$HEADER" -d "$JSON" "$URL" | python -mjson.tool
}
usercreate
