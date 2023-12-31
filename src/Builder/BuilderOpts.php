<?php

namespace AlxDorosenco\CurlPhp\Builder;

/**
 * https://www.php.net/manual/en/function.curl-setopt.php
 */
class BuilderOpts extends ABuilder
{
    public function setAutoReferer(bool $value = true): static
    {
        $this->opts[CURLOPT_AUTOREFERER] = $value;

        return $this;
    }

    public function setCookieSession(bool $value = true): static
    {
        $this->opts[CURLOPT_COOKIESESSION] = $value;

        return $this;
    }

    public function setCertInfo(bool $value = true): static
    {
        $this->opts[CURLOPT_CERTINFO] = $value;

        return $this;
    }

    public function setConnectOnly(bool $value = true): static
    {
        $this->opts[CURLOPT_CONNECT_ONLY] = $value;

        return $this;
    }

    public function setCrlf(bool $value = true): static
    {
        $this->opts[CURLOPT_CRLF] = $value;

        return $this;
    }

    public function setDisallowUsernameInUrl(bool $value = true): static
    {
        $this->opts[CURLOPT_DISALLOW_USERNAME_IN_URL] = $value;

        return $this;
    }

    public function setDnsShuffleAddresses(bool $value = true): static
    {
        $this->opts[CURLOPT_DNS_SHUFFLE_ADDRESSES] = $value;

        return $this;
    }

    public function setHaproxyProtocol(bool $value = true): static
    {
        $this->opts[CURLOPT_HAPROXYPROTOCOL] = $value;

        return $this;
    }

    public function setSshCompression(bool $value = true): static
    {
        $this->opts[CURLOPT_SSH_COMPRESSION] = $value;

        return $this;
    }

    public function setDnsUseGlobalCache(bool $value = true): static
    {
        $this->opts[CURLOPT_DNS_USE_GLOBAL_CACHE] = $value;

        return $this;
    }

    public function setFailOnError(bool $value = true): static
    {
        $this->opts[CURLOPT_FAILONERROR] = $value;

        return $this;
    }

    public function setSslFalseStart(bool $value = true): static
    {
        $this->opts[CURLOPT_SSL_FALSESTART] = $value;

        return $this;
    }

    public function setFileTime(bool $value = true): static
    {
        $this->opts[CURLOPT_FILETIME] = $value;

        return $this;
    }

    public function setFollowLocation(bool $value = true): static
    {
        $this->opts[CURLOPT_FOLLOWLOCATION] = $value;

        return $this;
    }

    public function setForbidReuse(bool $value = true): static
    {
        $this->opts[CURLOPT_FORBID_REUSE] = $value;

        return $this;
    }

    public function setFreshConnect(bool $value = true): static
    {
        $this->opts[CURLOPT_FRESH_CONNECT] = $value;

        return $this;
    }

    public function setFtpUseEprt(bool $value = true): static
    {
        $this->opts[CURLOPT_FTP_USE_EPRT] = $value;

        return $this;
    }

    public function setFtpUseEpsv(bool $value = true): static
    {
        $this->opts[CURLOPT_FTP_USE_EPSV] = $value;

        return $this;
    }

    public function setFtpCreateMissingDirs(bool $value = true): static
    {
        $this->opts[CURLOPT_FTP_CREATE_MISSING_DIRS] = $value;

        return $this;
    }

    public function setFtpAppend(bool $value = true): static
    {
        $this->opts[CURLOPT_FTPAPPEND] = $value;

        return $this;
    }

    public function setTcpNodeLay(bool $value = true): static
    {
        $this->opts[CURLOPT_TCP_NODELAY] = $value;

        return $this;
    }

    public function setFtpListOnly(bool $value = true): static
    {
        $this->opts[CURLOPT_FTPLISTONLY] = $value;

        return $this;
    }

    public function setHeader($value = true): static
    {
        $this->opts[CURLOPT_HEADER] = $value;

        return $this;
    }

    public function setHeaderOut($value = true): static
    {
        $this->opts[CURLINFO_HEADER_OUT] = $value;

        return $this;
    }

    public function setHttp09Allowed($value = true): static
    {
        $this->opts[CURLOPT_HTTP09_ALLOWED] = $value;

        return $this;
    }

    public function setHttpGet($value = true): static
    {
        $this->opts[CURLOPT_HTTPGET] = $value;

        return $this;
    }

    public function setHttpProxyTunnel($value = true): static
    {
        $this->opts[CURLOPT_HTTPPROXYTUNNEL] = $value;

        return $this;
    }

    public function setHttpContentDecoding($value = true): static
    {
        $this->opts[CURLOPT_HTTP_CONTENT_DECODING] = $value;

        return $this;
    }

    public function setKeepSendingOnError($value = true): static
    {
        $this->opts[CURLOPT_KEEP_SENDING_ON_ERROR] = $value;

        return $this;
    }

    public function setNetrc($value = true): static
    {
        $this->opts[CURLOPT_NETRC] = $value;

        return $this;
    }

    public function setNobody($value = true): static
    {
        $this->opts[CURLOPT_NOBODY] = $value;

        return $this;
    }

    public function setNoProgress($value = true): static
    {
        $this->opts[CURLOPT_NOPROGRESS] = $value;

        return $this;
    }

    public function setNoSignal($value = true): static
    {
        $this->opts[CURLOPT_NOSIGNAL] = $value;

        return $this;
    }

    public function setPathAsIs($value = true): static
    {
        $this->opts[CURLOPT_PATH_AS_IS] = $value;

        return $this;
    }

    public function setPipeWait($value = true): static
    {
        $this->opts[CURLOPT_PIPEWAIT] = $value;

        return $this;
    }

    public function setPost($value = true): static
    {
        $this->opts[CURLOPT_POST] = $value;

        return $this;
    }

    public function setPut($value = true): static
    {
        $this->opts[CURLOPT_PUT] = $value;

        return $this;
    }

    public function setReturnTransfer(bool $value = true): static
    {
        $this->opts[CURLOPT_RETURNTRANSFER] = $value;

        return $this;
    }

    public function setSaslIr(bool $value = true): static
    {
        $this->opts[CURLOPT_SASL_IR] = $value;

        return $this;
    }

    public function setSslEnableAlpn(bool $value = true): static
    {
        $this->opts[CURLOPT_SSL_ENABLE_ALPN] = $value;

        return $this;
    }

    public function setSslEnableNpn(bool $value = true): static
    {
        $this->opts[CURLOPT_SSL_ENABLE_NPN] = $value;

        return $this;
    }

    public function setSslVerifyPeer(bool $value = true): static
    {
        $this->opts[CURLOPT_SSL_VERIFYPEER] = $value;

        return $this;
    }

    public function setSslVerifyStatus(bool $value = true): static
    {
        $this->opts[CURLOPT_SSL_VERIFYSTATUS] = $value;

        return $this;
    }

    public function setProxySslVerifyPeer(bool $value = true): static
    {
        $this->opts[CURLOPT_PROXY_SSL_VERIFYPEER] = $value;

        return $this;
    }

    public function setSuppressConnectHeaders(bool $value = true): static
    {
        $this->opts[CURLOPT_SUPPRESS_CONNECT_HEADERS] = $value;

        return $this;
    }

    public function setTcpFastOpen(bool $value = true): static
    {
        $this->opts[CURLOPT_TCP_FASTOPEN] = $value;

        return $this;
    }

    public function setTftpNoOptions(bool $value = true): static
    {
        $this->opts[CURLOPT_TFTP_NO_OPTIONS] = $value;

        return $this;
    }

    public function setTransferText(bool $value = true): static
    {
        $this->opts[CURLOPT_TRANSFERTEXT] = $value;

        return $this;
    }

    public function setUnrestrictedAuth(bool $value = true): static
    {
        $this->opts[CURLOPT_UNRESTRICTED_AUTH] = $value;

        return $this;
    }

    public function setUpload(bool $value = true): static
    {
        $this->opts[CURLOPT_UPLOAD] = $value;

        return $this;
    }

    public function setVerbose(bool $value = true): static
    {
        $this->opts[CURLOPT_VERBOSE] = $value;

        return $this;
    }

    public function setBufferSize(int $value): static
    {
        $this->opts[CURLOPT_BUFFERSIZE] = $value;

        return $this;
    }

    public function setConnectTimeout(int $value): static
    {
        $this->opts[CURLOPT_CONNECTTIMEOUT] = $value;

        return $this;
    }

    public function setConnectTimeoutMs(int $value): static
    {
        $this->opts[CURLOPT_CONNECTTIMEOUT_MS] = $value;

        return $this;
    }

    public function setCDnsCacheTimeout(int $value): static
    {
        $this->opts[CURLOPT_DNS_CACHE_TIMEOUT] = $value;

        return $this;
    }

    public function setExpect100TimeoutMs(int $value): static
    {
        $this->opts[CURLOPT_EXPECT_100_TIMEOUT_MS] = $value;

        return $this;
    }

    public function setFtpSslAuth(int $value): static
    {
        $this->opts[CURLOPT_FTPSSLAUTH] = $value;

        return $this;
    }

    public function setHeaderOpt(int $value): static
    {
        $this->opts[CURLOPT_HEADEROPT] = $value;

        return $this;
    }

    public function setHttpVersion(int $value): static
    {
        $this->opts[CURLOPT_HTTP_VERSION] = $value;

        return $this;
    }

    public function setHttpAuth(int $value): static
    {
        $this->opts[CURLOPT_HTTPAUTH] = $value;

        return $this;
    }

    public function setInfileSize(int $value): static
    {
        $this->opts[CURLOPT_INFILESIZE] = $value;

        return $this;
    }

    public function setLowSpeedLimit(int $value): static
    {
        $this->opts[CURLOPT_LOW_SPEED_LIMIT] = $value;

        return $this;
    }

    public function setLowSpeedTime(int $value): static
    {
        $this->opts[CURLOPT_LOW_SPEED_TIME] = $value;

        return $this;
    }

    public function setMailRcptAllLowFails(int $value): static
    {
        $this->opts[CURLOPT_MAIL_RCPT_ALLLOWFAILS] = $value;

        return $this;
    }

    public function setMaxAgeConn(int $value): static
    {
        $this->opts[CURLOPT_MAXAGE_CONN] = $value;

        return $this;
    }

    public function setMaxFileSizeLarge(int $value): static
    {
        $this->opts[CURLOPT_MAXFILESIZE_LARGE] = $value;

        return $this;
    }

    public function setMaxLifeTimeConn(int $value): static
    {
        $this->opts[CURLOPT_MAXLIFETIME_CONN] = $value;

        return $this;
    }

    public function setMaxConnects(int $value): static
    {
        $this->opts[CURLOPT_MAXCONNECTS] = $value;

        return $this;
    }

    public function setMaxReDirs(int $value): static
    {
        $this->opts[CURLOPT_MAXREDIRS] = $value;

        return $this;
    }

    public function setPort(int $value): static
    {
        $this->opts[CURLOPT_PORT] = $value;

        return $this;
    }

    public function setPostReDir(int $value): static
    {
        $this->opts[CURLOPT_POSTREDIR] = $value;

        return $this;
    }

    public function setProtocols(int $value): static
    {
        $this->opts[CURLOPT_PROTOCOLS] = $value;

        return $this;
    }

    public function setProxyAuth(int $value): static
    {
        $this->opts[CURLOPT_PROXYAUTH] = $value;

        return $this;
    }

    public function setProxyPort(int $value): static
    {
        $this->opts[CURLOPT_PROXYPORT] = $value;

        return $this;
    }

    public function setProxyType(int $value): static
    {
        $this->opts[CURLOPT_PROXYTYPE] = $value;

        return $this;
    }

    public function setReDirProtocols(int $value): static
    {
        $this->opts[CURLOPT_REDIR_PROTOCOLS] = $value;

        return $this;
    }

    public function setResumeFrom(int $value): static
    {
        $this->opts[CURLOPT_RESUME_FROM] = $value;

        return $this;
    }

    public function setSockSsAuth(int $value): static
    {
        $this->opts[CURLOPT_SOCKS5_AUTH] = $value;

        return $this;
    }

    public function setSslOptions(int $value): static
    {
        $this->opts[CURLOPT_SSL_OPTIONS] = $value;

        return $this;
    }

    public function setSslVerifyHost(int $value): static
    {
        $this->opts[CURLOPT_SSL_VERIFYHOST] = $value;

        return $this;
    }

    public function setSslVersion(int $value): static
    {
        $this->opts[CURLOPT_SSLVERSION] = $value;

        return $this;
    }

    public function setProxySslOptions(int $value): static
    {
        $this->opts[CURLOPT_PROXY_SSL_OPTIONS] = $value;

        return $this;
    }

    public function setProxySslVerifyHost(int $value): static
    {
        $this->opts[CURLOPT_PROXY_SSL_VERIFYHOST] = $value;

        return $this;
    }

    public function setProxySslVersion(int $value): static
    {
        $this->opts[CURLOPT_PROXY_SSLVERSION] = $value;

        return $this;
    }

    public function setStreamWeight(int $value): static
    {
        $this->opts[CURLOPT_STREAM_WEIGHT] = $value;

        return $this;
    }

    public function setTcpKeepAlive(int $value): static
    {
        $this->opts[CURLOPT_TCP_KEEPALIVE] = $value;

        return $this;
    }

    public function setTcpKeepDle(int $value): static
    {
        $this->opts[CURLOPT_TCP_KEEPIDLE] = $value;

        return $this;
    }

    public function setTcpKeepIntVl(int $value): static
    {
        $this->opts[CURLOPT_TCP_KEEPINTVL] = $value;

        return $this;
    }

    public function setTimeCondition(int $value): static
    {
        $this->opts[CURLOPT_TIMECONDITION] = $value;

        return $this;
    }

    public function setTimeOut(int $value): static
    {
        $this->opts[CURLOPT_TIMEOUT] = $value;

        return $this;
    }

    public function setTimeOutMs(int $value): static
    {
        $this->opts[CURLOPT_TIMEOUT_MS] = $value;

        return $this;
    }

    public function setTimeValue(int $value): static
    {
        $this->opts[CURLOPT_TIMEVALUE] = $value;

        return $this;
    }

    public function setTimeValueLarge(int $value): static
    {
        $this->opts[CURLOPT_TIMEVALUE_LARGE] = $value;

        return $this;
    }

    public function setUpkeepIntervalMs(int $value): static
    {
        $this->opts[CURLOPT_UPKEEP_INTERVAL_MS] = $value;

        return $this;
    }

    public function setUploadBufferSize(int $value): static
    {
        $this->opts[CURLOPT_UPLOAD_BUFFERSIZE] = $value;

        return $this;
    }

    public function setMaxReCvSpeedLarge(int $value): static
    {
        $this->opts[CURLOPT_MAX_RECV_SPEED_LARGE] = $value;

        return $this;
    }

    public function setMaxSendSpeedLarge(int $value): static
    {
        $this->opts[CURLOPT_MAX_SEND_SPEED_LARGE] = $value;

        return $this;
    }

    public function setSshAuthTypes(int $value): static
    {
        $this->opts[CURLOPT_SSH_AUTH_TYPES] = $value;

        return $this;
    }

    public function setIpResolve(int $value): static
    {
        $this->opts[CURLOPT_IPRESOLVE] = $value;

        return $this;
    }

    public function setFtpFileMethod(int $value): static
    {
        $this->opts[CURLOPT_FTP_FILEMETHOD] = $value;

        return $this;
    }

    public function setAbstractUnixSocket(string $value): static
    {
        $this->opts[CURLOPT_ABSTRACT_UNIX_SOCKET] = $value;

        return $this;
    }

    public function setAltsvc(string $value): static
    {
        $this->opts[CURLOPT_ALTSVC] = $value;

        return $this;
    }

    public function setAltsvcCtrl(string $value): static
    {
        $this->opts[CURLOPT_ALTSVC_CTRL] = $value;

        return $this;
    }

    public function setAwsStgV4(string $value): static
    {
        $this->opts[CURLOPT_AWS_SIGV4] = $value;

        return $this;
    }

    public function setCatInfo(string $value): static
    {
        $this->opts[CURLOPT_CAINFO] = $value;

        return $this;
    }

    public function setCatInfoBlob(string $value): static
    {
        $this->opts[CURLOPT_CAINFO_BLOB] = $value;

        return $this;
    }

    public function setCapath(string $value): static
    {
        $this->opts[CURLOPT_CAPATH] = $value;

        return $this;
    }

    public function setCookie(string $value): static
    {
        $this->opts[CURLOPT_COOKIE] = $value;

        return $this;
    }

    public function setCookieFile(string $value): static
    {
        $this->opts[CURLOPT_COOKIEFILE] = $value;

        return $this;
    }

    public function setCookieJar(string $value): static
    {
        $this->opts[CURLOPT_COOKIEJAR] = $value;

        return $this;
    }

    public function setCookieList(string $value): static
    {
        $this->opts[CURLOPT_COOKIELIST] = $value;

        return $this;
    }

    public function setCustomRequest(string $value): static
    {
        $this->opts[CURLOPT_CUSTOMREQUEST] = $value;

        return $this;
    }

    public function setDefaultProtocol(string $value): static
    {
        $this->opts[CURLOPT_DEFAULT_PROTOCOL] = $value;

        return $this;
    }

    public function setDnsInterface(string $value): static
    {
        $this->opts[CURLOPT_DNS_INTERFACE] = $value;

        return $this;
    }

    public function setDnsLocalIp4(string $value): static
    {
        $this->opts[CURLOPT_DNS_LOCAL_IP4] = $value;

        return $this;
    }

    public function setDnsLocalIp6(string $value): static
    {
        $this->opts[CURLOPT_DNS_LOCAL_IP6] = $value;

        return $this;
    }

    public function setEgdSocket(string $value): static
    {
        $this->opts[CURLOPT_EGDSOCKET] = $value;

        return $this;
    }

    public function setEncoding(string $value): static
    {
        $this->opts[CURLOPT_ENCODING] = $value;

        return $this;
    }

    public function setFtpPort(string $value): static
    {
        $this->opts[CURLOPT_FTPPORT] = $value;

        return $this;
    }

    public function setHsts(string $value): static
    {
        $this->opts[CURLOPT_HSTS] = $value;

        return $this;
    }

    public function setHstsCtrl(string $value): static
    {
        $this->opts[CURLOPT_HSTS_CTRL] = $value;

        return $this;
    }

    public function setInterface(string $value): static
    {
        $this->opts[CURLOPT_INTERFACE] = $value;

        return $this;
    }

    public function setKeyPassWd(string $value): static
    {
        $this->opts[CURLOPT_KEYPASSWD] = $value;

        return $this;
    }

    public function setKrb4Level(string $value): static
    {
        $this->opts[CURLOPT_KRB4LEVEL] = $value;

        return $this;
    }

    public function setLoginOptions(string $value): static
    {
        $this->opts[CURLOPT_LOGIN_OPTIONS] = $value;

        return $this;
    }

    public function setPinnedPublicKey(string $value): static
    {
        $this->opts[CURLOPT_PINNEDPUBLICKEY] = $value;

        return $this;
    }

    public function setPostFields(string|array $value): static
    {
        $this->opts[CURLOPT_POSTFIELDS] = $value;

        return $this;
    }

    public function setPrivate($value): static
    {
        $this->opts[CURLOPT_PRIVATE] = $value;

        return $this;
    }

    public function setPreProxy($value): static
    {
        $this->opts[CURLOPT_PRE_PROXY] = $value;

        return $this;
    }

    public function setProxy($value): static
    {
        $this->opts[CURLOPT_PROXY] = $value;

        return $this;
    }

    public function setProxyServiceName(string $value): static
    {
        $this->opts[CURLOPT_PROXY_SERVICE_NAME] = $value;

        return $this;
    }

    public function setProxyCaInfo(string $value): static
    {
        $this->opts[CURLOPT_PROXY_CAINFO] = $value;

        return $this;
    }

    public function setProxyCaInfoBlob(string $value): static
    {
        $this->opts[CURLOPT_PROXY_CAINFO_BLOB] = $value;

        return $this;
    }

    public function setProxyCaPath(string $value): static
    {
        $this->opts[CURLOPT_PROXY_CAPATH] = $value;

        return $this;
    }

    public function setProxyCrlFile(string $value): static
    {
        $this->opts[CURLOPT_PROXY_CRLFILE] = $value;

        return $this;
    }

    public function setProxyKeyPassWd(string $value): static
    {
        $this->opts[CURLOPT_PROXY_KEYPASSWD] = $value;

        return $this;
    }

    public function setProxyKeyPinnedPublicKey(string $value): static
    {
        $this->opts[CURLOPT_PROXY_PINNEDPUBLICKEY] = $value;

        return $this;
    }

    public function setProxySslCert(string $value): static
    {
        $this->opts[CURLOPT_PROXY_SSLCERT] = $value;

        return $this;
    }

    public function setProxySslCertType(string $value): static
    {
        $this->opts[CURLOPT_PROXY_SSLCERTTYPE] = $value;

        return $this;
    }

    public function setProxySslCipherList(string $value): static
    {
        $this->opts[CURLOPT_PROXY_SSL_CIPHER_LIST] = $value;

        return $this;
    }

    public function setProxyTls13Ciphers(string $value): static
    {
        $this->opts[CURLOPT_PROXY_TLS13_CIPHERS] = $value;

        return $this;
    }

    public function setProxySslKey(string $value): static
    {
        $this->opts[CURLOPT_PROXY_SSLKEY] = $value;

        return $this;
    }

    public function setProxySslKeyType(string $value): static
    {
        $this->opts[CURLOPT_PROXY_SSLKEYTYPE] = $value;

        return $this;
    }

    public function setProxyTlsAuthPassword(string $value): static
    {
        $this->opts[CURLOPT_PROXY_TLSAUTH_PASSWORD] = $value;

        return $this;
    }

    public function setProxyTlsAuthType(string $value): static
    {
        $this->opts[CURLOPT_PROXY_TLSAUTH_TYPE] = $value;

        return $this;
    }

    public function setProxyTlsAuthUsername(string $value): static
    {
        $this->opts[CURLOPT_PROXY_TLSAUTH_USERNAME] = $value;

        return $this;
    }

    public function setProxyUserPwd(string $value): static
    {
        $this->opts[CURLOPT_PROXYUSERPWD] = $value;

        return $this;
    }

    public function setRandomFile(string $value): static
    {
        $this->opts[CURLOPT_RANDOM_FILE] = $value;

        return $this;
    }

    public function setRange(string $value): static
    {
        $this->opts[CURLOPT_RANGE] = $value;

        return $this;
    }

    public function setReferer(string $value): static
    {
        $this->opts[CURLOPT_REFERER] = $value;

        return $this;
    }

    public function setSaslAuthZid(string $value): static
    {
        $this->opts[CURLOPT_SASL_AUTHZID] = $value;

        return $this;
    }

    public function setServiceName(string $value): static
    {
        $this->opts[CURLOPT_SERVICE_NAME] = $value;

        return $this;
    }

    public function setSshHostPublicKeyMd5(string $value): static
    {
        $this->opts[CURLOPT_SSH_HOST_PUBLIC_KEY_MD5] = $value;

        return $this;
    }

    public function setSshHostPublicKeySha256(string $value): static
    {
        $this->opts[CURLOPT_SSH_HOST_PUBLIC_KEY_SHA256] = $value;

        return $this;
    }

    public function setSshPublicKeyFile(string $value): static
    {
        $this->opts[CURLOPT_SSH_PUBLIC_KEYFILE] = $value;

        return $this;
    }

    public function setSshPrivateKeyFile(string $value): static
    {
        $this->opts[CURLOPT_SSH_PRIVATE_KEYFILE] = $value;

        return $this;
    }

    public function setSslCipherList(string $value): static
    {
        $this->opts[CURLOPT_SSL_CIPHER_LIST] = $value;

        return $this;
    }

    public function setSslEcCurves(string $value): static
    {
        $this->opts[CURLOPT_SSL_EC_CURVES] = $value;

        return $this;
    }

    public function setSslCert(string $value): static
    {
        $this->opts[CURLOPT_SSLCERT] = $value;

        return $this;
    }

    public function setSslCertPassWd(string $value): static
    {
        $this->opts[CURLOPT_SSLCERTPASSWD] = $value;

        return $this;
    }

    public function setSslCertType(string $value): static
    {
        $this->opts[CURLOPT_SSLCERTTYPE] = $value;

        return $this;
    }

    public function setSslEngine(string $value): static
    {
        $this->opts[CURLOPT_SSLENGINE] = $value;

        return $this;
    }

    public function setSslEngineDefault(string $value): static
    {
        $this->opts[CURLOPT_SSLENGINE_DEFAULT] = $value;

        return $this;
    }

    public function setSslKey(string $value): static
    {
        $this->opts[CURLOPT_SSLKEY] = $value;

        return $this;
    }

    public function setSslKeyPassWd(string $value): static
    {
        $this->opts[CURLOPT_SSLKEYPASSWD] = $value;

        return $this;
    }

    public function setSslKeyType(string $value): static
    {
        $this->opts[CURLOPT_SSLKEYTYPE] = $value;

        return $this;
    }

    public function setTls13Ciphers(string $value): static
    {
        $this->opts[CURLOPT_TLS13_CIPHERS] = $value;

        return $this;
    }

    public function setUnixSocketPath(string $value): static
    {
        $this->opts[CURLOPT_UNIX_SOCKET_PATH] = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->opts[CURLOPT_URL] = $value;

        return $this;
    }

    public function setUserAgent(string $value): static
    {
        $this->opts[CURLOPT_USERAGENT] = $value;

        return $this;
    }

    public function setUserName(string $value): static
    {
        $this->opts[CURLOPT_USERNAME] = $value;

        return $this;
    }

    public function setPassword(string $value): static
    {
        $this->opts[CURLOPT_PASSWORD] = $value;

        return $this;
    }

    public function setUserPwd(string $value): static
    {
        $this->opts[CURLOPT_USERPWD] = $value;

        return $this;
    }

    public function setXoAuth2Bearer(string $value): static
    {
        $this->opts[CURLOPT_XOAUTH2_BEARER] = $value;

        return $this;
    }

    public function setConnectTo(array $value): static
    {
        $this->opts[CURLOPT_CONNECT_TO] = $value;

        return $this;
    }

    public function setHttp200Aliases(array $value): static
    {
        $this->opts[CURLOPT_HTTP200ALIASES] = $value;

        return $this;
    }

    public function setHttpHeader(array $value = []): static
    {
        $this->opts[CURLOPT_HTTPHEADER] = $value;

        return $this;
    }

    public function setPostQuote(array $value): static
    {
        $this->opts[CURLOPT_POSTQUOTE] = $value;

        return $this;
    }

    public function setProxyHeader(array $value = []): static
    {
        $this->opts[CURLOPT_PROXYHEADER] = $value;

        return $this;
    }

    public function setQuote(array $value): static
    {
        $this->opts[CURLOPT_QUOTE] = $value;

        return $this;
    }

    public function setResolve(array $value): static
    {
        $this->opts[CURLOPT_RESOLVE] = $value;

        return $this;
    }

    public function setFile($value): static
    {
        $this->opts[CURLOPT_FILE] = $value;

        return $this;
    }

    public function setInFile($value): static
    {
        $this->opts[CURLOPT_INFILE] = $value;

        return $this;
    }

    public function setStdErr($value): static
    {
        $this->opts[CURLOPT_STDERR] = $value;

        return $this;
    }

    public function setWriteHeader($value): static
    {
        $this->opts[CURLOPT_WRITEHEADER] = $value;

        return $this;
    }

    public function setHeaderFunction(\Closure $value): static
    {
        $this->opts[CURLOPT_HEADERFUNCTION] = $value;

        return $this;
    }

    public function setProgressFunction(\Closure $value): static
    {
        $this->opts[CURLOPT_PROGRESSFUNCTION] = $value;

        return $this;
    }

    public function setReadFunction(\Closure $value): static
    {
        $this->opts[CURLOPT_READFUNCTION] = $value;

        return $this;
    }

    public function setWriteFunction(\Closure $value): static
    {
        $this->opts[CURLOPT_WRITEFUNCTION] = $value;

        return $this;
    }

    public function setXFerInfoFunction(\Closure $value): static
    {
        $this->opts[CURLOPT_XFERINFOFUNCTION] = $value;

        return $this;
    }

    public function setShare(\CurlShareHandle $value): static
    {
        $this->opts[CURLOPT_SHARE] = $value;

        return $this;
    }
}