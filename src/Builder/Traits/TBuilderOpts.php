<?php

namespace AlxDorosenco\CurlPhp\Builder\Traits;

use AlxDorosenco\CurlPhp\Builder\IBuilder;

trait TBuilderOpts
{
    public function setAutoReferer(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_AUTOREFERER] = $value;

        return $this;
    }

    public function setCookieSession(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_COOKIESESSION] = $value;

        return $this;
    }

    public function setCertInfo(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_CERTINFO] = $value;

        return $this;
    }

    public function setConnectOnly(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_CONNECT_ONLY] = $value;

        return $this;
    }

    public function setCrlf(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_CRLF] = $value;

        return $this;
    }

    public function setDisallowUsernameInUrl(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_DISALLOW_USERNAME_IN_URL] = $value;

        return $this;
    }

    public function setDnsShuffleAddresses(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_DNS_SHUFFLE_ADDRESSES] = $value;

        return $this;
    }

    public function setHaproxyProtocol(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_HAPROXYPROTOCOL] = $value;

        return $this;
    }

    public function setSshCompression(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SSH_COMPRESSION] = $value;

        return $this;
    }

    public function setDnsUseGlobalCache(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_DNS_USE_GLOBAL_CACHE] = $value;

        return $this;
    }

    public function setFailOnError(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FAILONERROR] = $value;

        return $this;
    }

    public function setSslFalseStart(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SSL_FALSESTART] = $value;

        return $this;
    }

    public function setFileTime(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FILETIME] = $value;

        return $this;
    }

    public function setFollowLocation(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FOLLOWLOCATION] = $value;

        return $this;
    }

    public function setForbidReuse(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FORBID_REUSE] = $value;

        return $this;
    }

    public function setFreshConnect(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FRESH_CONNECT] = $value;

        return $this;
    }

    public function setFtpUseEprt(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FTP_USE_EPRT] = $value;

        return $this;
    }

    public function setFtpUseEpsv(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FTP_USE_EPSV] = $value;

        return $this;
    }

    public function setFtpCreateMissingDirs(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FTP_CREATE_MISSING_DIRS] = $value;

        return $this;
    }

    public function setFtpAppend(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FTPAPPEND] = $value;

        return $this;
    }

    public function setTcpNodeLay(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_TCP_NODELAY] = $value;

        return $this;
    }

    public function setFtpAscii(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FTPASCII] = $value;

        return $this;
    }

    public function setFtpListOnly(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_FTPLISTONLY] = $value;

        return $this;
    }

    public function setHeader($value = true): IBuilder
    {
        $this->opts[CURLOPT_HEADER] = $value;

        return $this;
    }

    public function setHeaderOut($value = true): IBuilder
    {
        $this->opts[CURLINFO_HEADER_OUT] = $value;

        return $this;
    }

    public function setHttp09Allowed($value = true): IBuilder
    {
        $this->opts[CURLOPT_HTTP09_ALLOWED] = $value;

        return $this;
    }

    public function setHttpGet($value = true): IBuilder
    {
        $this->opts[CURLOPT_HTTPGET] = $value;

        return $this;
    }

    public function setHttpProxyTunnel($value = true): IBuilder
    {
        $this->opts[CURLOPT_HTTPPROXYTUNNEL] = $value;

        return $this;
    }

    public function setHttpContentDecoding($value = true): IBuilder
    {
        $this->opts[CURLOPT_HTTP_CONTENT_DECODING] = $value;

        return $this;
    }

    public function setKeepSendingOnError($value = true): IBuilder
    {
        $this->opts[CURLOPT_KEEP_SENDING_ON_ERROR] = $value;

        return $this;
    }

    public function setMute($value = true): IBuilder
    {
        $this->opts[CURLOPT_MUTE] = $value;

        return $this;
    }

    public function setNetrc($value = true): IBuilder
    {
        $this->opts[CURLOPT_NETRC] = $value;

        return $this;
    }

    public function setNobody($value = true): IBuilder
    {
        $this->opts[CURLOPT_NOBODY] = $value;

        return $this;
    }

    public function setNoProgress($value = true): IBuilder
    {
        $this->opts[CURLOPT_NOPROGRESS] = $value;

        return $this;
    }

    public function setNoSignal($value = true): IBuilder
    {
        $this->opts[CURLOPT_NOSIGNAL] = $value;

        return $this;
    }

    public function setPathAsIs($value = true): IBuilder
    {
        $this->opts[CURLOPT_PATH_AS_IS] = $value;

        return $this;
    }

    public function setPipeWait($value = true): IBuilder
    {
        $this->opts[CURLOPT_PIPEWAIT] = $value;

        return $this;
    }

    public function setPost($value = true): IBuilder
    {
        $this->opts[CURLOPT_POST] = $value;

        return $this;
    }

    public function setPut($value = true): IBuilder
    {
        $this->opts[CURLOPT_PUT] = $value;

        return $this;
    }

    public function setReturnTransfer(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_RETURNTRANSFER] = $value;

        return $this;
    }

    public function setSaslIr(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SASL_IR] = $value;

        return $this;
    }

    public function setSslEnableAlpn(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SSL_ENABLE_ALPN] = $value;

        return $this;
    }

    public function setSslEnableNpn(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SSL_ENABLE_NPN] = $value;

        return $this;
    }

    public function setSslVerifyPeer(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYPEER] = $value;

        return $this;
    }

    public function setSslVerifyStatus(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYSTATUS] = $value;

        return $this;
    }

    public function setProxySslVerifyPeer(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_PROXY_SSL_VERIFYPEER] = $value;

        return $this;
    }

    public function setSafeUpload(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SAFE_UPLOAD] = $value;

        return $this;
    }

    public function setSuppressConnectHeaders(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_SUPPRESS_CONNECT_HEADERS] = $value;

        return $this;
    }

    public function setTcpFastOpen(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_TCP_FASTOPEN] = $value;

        return $this;
    }

    public function setTftpNoOptions(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_TFTP_NO_OPTIONS] = $value;

        return $this;
    }

    public function setTransferText(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_TRANSFERTEXT] = $value;

        return $this;
    }

    public function setUnrestrictedAuth(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_UNRESTRICTED_AUTH] = $value;

        return $this;
    }

    public function setUpload(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_UPLOAD] = $value;

        return $this;
    }

    public function setVerbose(bool $value = true): IBuilder
    {
        $this->opts[CURLOPT_VERBOSE] = $value;

        return $this;
    }

    public function setBufferSize(int $value): IBuilder
    {
        $this->opts[CURLOPT_BUFFERSIZE] = $value;

        return $this;
    }

    public function setConnectTimeout(int $value): IBuilder
    {
        $this->opts[CURLOPT_CONNECTTIMEOUT] = $value;

        return $this;
    }

    public function setConnectTimeoutMs(int $value): IBuilder
    {
        $this->opts[CURLOPT_CONNECTTIMEOUT_MS] = $value;

        return $this;
    }

    public function setCDnsCacheTimeout(int $value): IBuilder
    {
        $this->opts[CURLOPT_DNS_CACHE_TIMEOUT] = $value;

        return $this;
    }

    public function setExpect100TimeoutMs(int $value): IBuilder
    {
        $this->opts[CURLOPT_EXPECT_100_TIMEOUT_MS] = $value;

        return $this;
    }

    public function setFtpSslAuth(int $value): IBuilder
    {
        $this->opts[CURLOPT_FTPSSLAUTH] = $value;

        return $this;
    }

    public function setHeaderOpt(int $value): IBuilder
    {
        $this->opts[CURLOPT_HEADEROPT] = $value;

        return $this;
    }

    public function setHttpVersion(int $value): IBuilder
    {
        $this->opts[CURLOPT_HTTP_VERSION] = $value;

        return $this;
    }

    public function setHttpAuth(int $value): IBuilder
    {
        $this->opts[CURLOPT_HTTPAUTH] = $value;

        return $this;
    }

    public function setInfileSize(int $value): IBuilder
    {
        $this->opts[CURLOPT_INFILESIZE] = $value;

        return $this;
    }

    public function setLowSpeedLimit(int $value): IBuilder
    {
        $this->opts[CURLOPT_LOW_SPEED_LIMIT] = $value;

        return $this;
    }

    public function setLowSpeedTime(int $value): IBuilder
    {
        $this->opts[CURLOPT_LOW_SPEED_TIME] = $value;

        return $this;
    }

    public function setMailRcptAllLowFails(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAIL_RCPT_ALLLOWFAILS] = $value;

        return $this;
    }

    public function setMaxAgeConn(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAXAGE_CONN] = $value;

        return $this;
    }

    public function setMaxFileSizeLarge(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAXFILESIZE_LARGE] = $value;

        return $this;
    }

    public function setMaxLifeTimeConn(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAXLIFETIME_CONN] = $value;

        return $this;
    }

    public function setMaxConnects(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAXCONNECTS] = $value;

        return $this;
    }

    public function setMaxReDirs(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAXREDIRS] = $value;

        return $this;
    }

    public function setPort(int $value): IBuilder
    {
        $this->opts[CURLOPT_PORT] = $value;

        return $this;
    }

    public function setPostReDir(int $value): IBuilder
    {
        $this->opts[CURLOPT_POSTREDIR] = $value;

        return $this;
    }

    public function setProtocols(int $value): IBuilder
    {
        $this->opts[CURLOPT_PROTOCOLS] = $value;

        return $this;
    }

    public function setProxyAuth(int $value): IBuilder
    {
        $this->opts[CURLOPT_PROXYAUTH] = $value;

        return $this;
    }

    public function setProxyPort(int $value): IBuilder
    {
        $this->opts[CURLOPT_PROXYPORT] = $value;

        return $this;
    }

    public function setProxyType(int $value): IBuilder
    {
        $this->opts[CURLOPT_PROXYTYPE] = $value;

        return $this;
    }

    public function setReDirProtocols(int $value): IBuilder
    {
        $this->opts[CURLOPT_REDIR_PROTOCOLS] = $value;

        return $this;
    }

    public function setResumeFrom(int $value): IBuilder
    {
        $this->opts[CURLOPT_RESUME_FROM] = $value;

        return $this;
    }

    public function setSockSsAuth(int $value): IBuilder
    {
        $this->opts[CURLOPT_SOCKS5_AUTH] = $value;

        return $this;
    }

    public function setSslOptions(int $value): IBuilder
    {
        $this->opts[CURLOPT_SSL_OPTIONS] = $value;

        return $this;
    }

    public function setSslVerifyHost(int $value): IBuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYHOST] = $value;

        return $this;
    }

    public function setSslVersion(int $value): IBuilder
    {
        $this->opts[CURLOPT_SSLVERSION] = $value;

        return $this;
    }

    public function setProxySslOptions(int $value): IBuilder
    {
        $this->opts[CURLOPT_PROXY_SSL_OPTIONS] = $value;

        return $this;
    }

    public function setProxySslVerifyHost(int $value): IBuilder
    {
        $this->opts[CURLOPT_PROXY_SSL_VERIFYHOST] = $value;

        return $this;
    }

    public function setProxySslVersion(int $value): IBuilder
    {
        $this->opts[CURLOPT_PROXY_SSLVERSION] = $value;

        return $this;
    }

    public function setStreamWeight(int $value): IBuilder
    {
        $this->opts[CURLOPT_STREAM_WEIGHT] = $value;

        return $this;
    }

    public function setTcpKeepAlive(int $value): IBuilder
    {
        $this->opts[CURLOPT_TCP_KEEPALIVE] = $value;

        return $this;
    }

    public function setTcpKeepDle(int $value): IBuilder
    {
        $this->opts[CURLOPT_TCP_KEEPIDLE] = $value;

        return $this;
    }

    public function setTcpKeepIntVl(int $value): IBuilder
    {
        $this->opts[CURLOPT_TCP_KEEPINTVL] = $value;

        return $this;
    }

    public function setTimeCondition(int $value): IBuilder
    {
        $this->opts[CURLOPT_TIMECONDITION] = $value;

        return $this;
    }

    public function setTimeOut(int $value): IBuilder
    {
        $this->opts[CURLOPT_TIMEOUT] = $value;

        return $this;
    }

    public function setTimeOutMs(int $value): IBuilder
    {
        $this->opts[CURLOPT_TIMEOUT_MS] = $value;

        return $this;
    }

    public function setTimeValue(int $value): IBuilder
    {
        $this->opts[CURLOPT_TIMEVALUE] = $value;

        return $this;
    }

    public function setTimeValueLarge(int $value): IBuilder
    {
        $this->opts[CURLOPT_TIMEVALUE_LARGE] = $value;

        return $this;
    }

    public function setUpkeepIntervalMs(int $value): IBuilder
    {
        $this->opts[CURLOPT_UPKEEP_INTERVAL_MS] = $value;

        return $this;
    }

    public function setUploadBufferSize(int $value): IBuilder
    {
        $this->opts[CURLOPT_UPLOAD_BUFFERSIZE] = $value;

        return $this;
    }

    public function setMaxReCvSpeedLarge(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAX_RECV_SPEED_LARGE] = $value;

        return $this;
    }

    public function setMaxSendSpeedLarge(int $value): IBuilder
    {
        $this->opts[CURLOPT_MAX_SEND_SPEED_LARGE] = $value;

        return $this;
    }

    public function setSshAuthTypes(int $value): IBuilder
    {
        $this->opts[CURLOPT_SSH_AUTH_TYPES] = $value;

        return $this;
    }

    public function setIpResolve(int $value): IBuilder
    {
        $this->opts[CURLOPT_IPRESOLVE] = $value;

        return $this;
    }

    public function setFtpFileMethod(int $value): IBuilder
    {
        $this->opts[CURLOPT_FTP_FILEMETHOD] = $value;

        return $this;
    }

    public function setUrl($value): IBuilder
    {
        $this->opts[CURLOPT_URL] = $value;

        return $this;
    }

    public function setCustomRequest($value): IBuilder
    {
        $this->opts[CURLOPT_CUSTOMREQUEST] = $value;

        return $this;
    }

    public function setPostFields($value): IBuilder
    {
        $this->opts[CURLOPT_POSTFIELDS] = $value;

        return $this;
    }

    public function setHttpHeader($value = []): IBuilder
    {
        $this->opts[CURLOPT_HTTPHEADER] = $value;

        return $this;
    }
}