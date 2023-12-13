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

    public function setSslVerifyHost($value): IBuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYPEER] = $value;

        return $this;
    }
}