<?php

namespace AlxDorosenco\CurlPhp\Builder;

/**
 * https://www.php.net/manual/en/function.curl-multi-setopt.php
 */
class BuilderMultiOpts extends ABuilder
{
    public function setPipelining(int $value): static
    {
        $this->opts[CURLMOPT_PIPELINING] = $value;

        return $this;
    }

    public function setMaxConnects(int $value): static
    {
        $this->opts[CURLMOPT_MAXCONNECTS] = $value;

        return $this;
    }

    public function setChunkLengthPenaltySize(int $value): static
    {
        $this->opts[CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE] = $value;

        return $this;
    }

    public function setContentLengthPenaltySize(int $value): static
    {
        $this->opts[CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE] = $value;

        return $this;
    }

    public function setMaxConcurrentStreams(int $value = 100): static
    {
        $this->opts[CURLMOPT_MAX_CONCURRENT_STREAMS] = $value;

        return $this;
    }

    public function setMaxHostConnections(int $value): static
    {
        $this->opts[CURLMOPT_MAX_HOST_CONNECTIONS] = $value;

        return $this;
    }

    public function setMaxPipelineLength(int $value): static
    {
        $this->opts[CURLMOPT_MAX_PIPELINE_LENGTH] = $value;

        return $this;
    }

    public function setMaxTotalConnections(int $value): static
    {
        $this->opts[CURLMOPT_MAX_TOTAL_CONNECTIONS] = $value;

        return $this;
    }

    public function setPushFunction(\Closure $value): static
    {
        $this->opts[CURLMOPT_PUSHFUNCTION] = $value;

        return $this;
    }
}