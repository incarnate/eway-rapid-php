<?php

namespace Eway\Rapid\Model\Support;

/**
 * Trait HasTransactionTypeTrait.
 */
trait HasTransactionTypeTrait
{
    /**
     * @param string $transactionType
     *
     * @return $this
     */
    public function setTransactionTypeAttribute($transactionType)
    {
        // Handle error response states
        if (!is_int($transactionType) && $transactionType != 'Unknown') {
            $this->validateEnum('Eway\Rapid\Enum\TransactionType', 'TransactionType', $transactionType);
        }

        return $this;
    }
}
