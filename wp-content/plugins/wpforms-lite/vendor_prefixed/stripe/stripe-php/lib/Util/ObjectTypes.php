<?php

// File generated from our OpenAPI spec
namespace WPForms\Vendor\Stripe\Util;

class ObjectTypes
{
    /**
     * @var array Mapping from object types to resource classes
     */
    const mapping = [\WPForms\Vendor\Stripe\Account::OBJECT_NAME => \WPForms\Vendor\Stripe\Account::class, \WPForms\Vendor\Stripe\AccountLink::OBJECT_NAME => \WPForms\Vendor\Stripe\AccountLink::class, \WPForms\Vendor\Stripe\ApplePayDomain::OBJECT_NAME => \WPForms\Vendor\Stripe\ApplePayDomain::class, \WPForms\Vendor\Stripe\ApplicationFee::OBJECT_NAME => \WPForms\Vendor\Stripe\ApplicationFee::class, \WPForms\Vendor\Stripe\ApplicationFeeRefund::OBJECT_NAME => \WPForms\Vendor\Stripe\ApplicationFeeRefund::class, \WPForms\Vendor\Stripe\Apps\Secret::OBJECT_NAME => \WPForms\Vendor\Stripe\Apps\Secret::class, \WPForms\Vendor\Stripe\Balance::OBJECT_NAME => \WPForms\Vendor\Stripe\Balance::class, \WPForms\Vendor\Stripe\BalanceTransaction::OBJECT_NAME => \WPForms\Vendor\Stripe\BalanceTransaction::class, \WPForms\Vendor\Stripe\BankAccount::OBJECT_NAME => \WPForms\Vendor\Stripe\BankAccount::class, \WPForms\Vendor\Stripe\BillingPortal\Configuration::OBJECT_NAME => \WPForms\Vendor\Stripe\BillingPortal\Configuration::class, \WPForms\Vendor\Stripe\BillingPortal\Session::OBJECT_NAME => \WPForms\Vendor\Stripe\BillingPortal\Session::class, \WPForms\Vendor\Stripe\Capability::OBJECT_NAME => \WPForms\Vendor\Stripe\Capability::class, \WPForms\Vendor\Stripe\Card::OBJECT_NAME => \WPForms\Vendor\Stripe\Card::class, \WPForms\Vendor\Stripe\CashBalance::OBJECT_NAME => \WPForms\Vendor\Stripe\CashBalance::class, \WPForms\Vendor\Stripe\Charge::OBJECT_NAME => \WPForms\Vendor\Stripe\Charge::class, \WPForms\Vendor\Stripe\Checkout\Session::OBJECT_NAME => \WPForms\Vendor\Stripe\Checkout\Session::class, \WPForms\Vendor\Stripe\Collection::OBJECT_NAME => \WPForms\Vendor\Stripe\Collection::class, \WPForms\Vendor\Stripe\CountrySpec::OBJECT_NAME => \WPForms\Vendor\Stripe\CountrySpec::class, \WPForms\Vendor\Stripe\Coupon::OBJECT_NAME => \WPForms\Vendor\Stripe\Coupon::class, \WPForms\Vendor\Stripe\CreditNote::OBJECT_NAME => \WPForms\Vendor\Stripe\CreditNote::class, \WPForms\Vendor\Stripe\CreditNoteLineItem::OBJECT_NAME => \WPForms\Vendor\Stripe\CreditNoteLineItem::class, \WPForms\Vendor\Stripe\Customer::OBJECT_NAME => \WPForms\Vendor\Stripe\Customer::class, \WPForms\Vendor\Stripe\CustomerBalanceTransaction::OBJECT_NAME => \WPForms\Vendor\Stripe\CustomerBalanceTransaction::class, \WPForms\Vendor\Stripe\CustomerCashBalanceTransaction::OBJECT_NAME => \WPForms\Vendor\Stripe\CustomerCashBalanceTransaction::class, \WPForms\Vendor\Stripe\Discount::OBJECT_NAME => \WPForms\Vendor\Stripe\Discount::class, \WPForms\Vendor\Stripe\Dispute::OBJECT_NAME => \WPForms\Vendor\Stripe\Dispute::class, \WPForms\Vendor\Stripe\EphemeralKey::OBJECT_NAME => \WPForms\Vendor\Stripe\EphemeralKey::class, \WPForms\Vendor\Stripe\Event::OBJECT_NAME => \WPForms\Vendor\Stripe\Event::class, \WPForms\Vendor\Stripe\ExchangeRate::OBJECT_NAME => \WPForms\Vendor\Stripe\ExchangeRate::class, \WPForms\Vendor\Stripe\File::OBJECT_NAME => \WPForms\Vendor\Stripe\File::class, \WPForms\Vendor\Stripe\File::OBJECT_NAME_ALT => \WPForms\Vendor\Stripe\File::class, \WPForms\Vendor\Stripe\FileLink::OBJECT_NAME => \WPForms\Vendor\Stripe\FileLink::class, \WPForms\Vendor\Stripe\FinancialConnections\Account::OBJECT_NAME => \WPForms\Vendor\Stripe\FinancialConnections\Account::class, \WPForms\Vendor\Stripe\FinancialConnections\AccountOwner::OBJECT_NAME => \WPForms\Vendor\Stripe\FinancialConnections\AccountOwner::class, \WPForms\Vendor\Stripe\FinancialConnections\AccountOwnership::OBJECT_NAME => \WPForms\Vendor\Stripe\FinancialConnections\AccountOwnership::class, \WPForms\Vendor\Stripe\FinancialConnections\Session::OBJECT_NAME => \WPForms\Vendor\Stripe\FinancialConnections\Session::class, \WPForms\Vendor\Stripe\FundingInstructions::OBJECT_NAME => \WPForms\Vendor\Stripe\FundingInstructions::class, \WPForms\Vendor\Stripe\Identity\VerificationReport::OBJECT_NAME => \WPForms\Vendor\Stripe\Identity\VerificationReport::class, \WPForms\Vendor\Stripe\Identity\VerificationSession::OBJECT_NAME => \WPForms\Vendor\Stripe\Identity\VerificationSession::class, \WPForms\Vendor\Stripe\Invoice::OBJECT_NAME => \WPForms\Vendor\Stripe\Invoice::class, \WPForms\Vendor\Stripe\InvoiceItem::OBJECT_NAME => \WPForms\Vendor\Stripe\InvoiceItem::class, \WPForms\Vendor\Stripe\InvoiceLineItem::OBJECT_NAME => \WPForms\Vendor\Stripe\InvoiceLineItem::class, \WPForms\Vendor\Stripe\Issuing\Authorization::OBJECT_NAME => \WPForms\Vendor\Stripe\Issuing\Authorization::class, \WPForms\Vendor\Stripe\Issuing\Card::OBJECT_NAME => \WPForms\Vendor\Stripe\Issuing\Card::class, \WPForms\Vendor\Stripe\Issuing\CardDetails::OBJECT_NAME => \WPForms\Vendor\Stripe\Issuing\CardDetails::class, \WPForms\Vendor\Stripe\Issuing\Cardholder::OBJECT_NAME => \WPForms\Vendor\Stripe\Issuing\Cardholder::class, \WPForms\Vendor\Stripe\Issuing\Dispute::OBJECT_NAME => \WPForms\Vendor\Stripe\Issuing\Dispute::class, \WPForms\Vendor\Stripe\Issuing\Transaction::OBJECT_NAME => \WPForms\Vendor\Stripe\Issuing\Transaction::class, \WPForms\Vendor\Stripe\LineItem::OBJECT_NAME => \WPForms\Vendor\Stripe\LineItem::class, \WPForms\Vendor\Stripe\LoginLink::OBJECT_NAME => \WPForms\Vendor\Stripe\LoginLink::class, \WPForms\Vendor\Stripe\Mandate::OBJECT_NAME => \WPForms\Vendor\Stripe\Mandate::class, \WPForms\Vendor\Stripe\PaymentIntent::OBJECT_NAME => \WPForms\Vendor\Stripe\PaymentIntent::class, \WPForms\Vendor\Stripe\PaymentLink::OBJECT_NAME => \WPForms\Vendor\Stripe\PaymentLink::class, \WPForms\Vendor\Stripe\PaymentMethod::OBJECT_NAME => \WPForms\Vendor\Stripe\PaymentMethod::class, \WPForms\Vendor\Stripe\Payout::OBJECT_NAME => \WPForms\Vendor\Stripe\Payout::class, \WPForms\Vendor\Stripe\Person::OBJECT_NAME => \WPForms\Vendor\Stripe\Person::class, \WPForms\Vendor\Stripe\Plan::OBJECT_NAME => \WPForms\Vendor\Stripe\Plan::class, \WPForms\Vendor\Stripe\Price::OBJECT_NAME => \WPForms\Vendor\Stripe\Price::class, \WPForms\Vendor\Stripe\Product::OBJECT_NAME => \WPForms\Vendor\Stripe\Product::class, \WPForms\Vendor\Stripe\PromotionCode::OBJECT_NAME => \WPForms\Vendor\Stripe\PromotionCode::class, \WPForms\Vendor\Stripe\Quote::OBJECT_NAME => \WPForms\Vendor\Stripe\Quote::class, \WPForms\Vendor\Stripe\Radar\EarlyFraudWarning::OBJECT_NAME => \WPForms\Vendor\Stripe\Radar\EarlyFraudWarning::class, \WPForms\Vendor\Stripe\Radar\ValueList::OBJECT_NAME => \WPForms\Vendor\Stripe\Radar\ValueList::class, \WPForms\Vendor\Stripe\Radar\ValueListItem::OBJECT_NAME => \WPForms\Vendor\Stripe\Radar\ValueListItem::class, \WPForms\Vendor\Stripe\Refund::OBJECT_NAME => \WPForms\Vendor\Stripe\Refund::class, \WPForms\Vendor\Stripe\Reporting\ReportRun::OBJECT_NAME => \WPForms\Vendor\Stripe\Reporting\ReportRun::class, \WPForms\Vendor\Stripe\Reporting\ReportType::OBJECT_NAME => \WPForms\Vendor\Stripe\Reporting\ReportType::class, \WPForms\Vendor\Stripe\Review::OBJECT_NAME => \WPForms\Vendor\Stripe\Review::class, \WPForms\Vendor\Stripe\SearchResult::OBJECT_NAME => \WPForms\Vendor\Stripe\SearchResult::class, \WPForms\Vendor\Stripe\SetupAttempt::OBJECT_NAME => \WPForms\Vendor\Stripe\SetupAttempt::class, \WPForms\Vendor\Stripe\SetupIntent::OBJECT_NAME => \WPForms\Vendor\Stripe\SetupIntent::class, \WPForms\Vendor\Stripe\ShippingRate::OBJECT_NAME => \WPForms\Vendor\Stripe\ShippingRate::class, \WPForms\Vendor\Stripe\Sigma\ScheduledQueryRun::OBJECT_NAME => \WPForms\Vendor\Stripe\Sigma\ScheduledQueryRun::class, \WPForms\Vendor\Stripe\Source::OBJECT_NAME => \WPForms\Vendor\Stripe\Source::class, \WPForms\Vendor\Stripe\SourceTransaction::OBJECT_NAME => \WPForms\Vendor\Stripe\SourceTransaction::class, \WPForms\Vendor\Stripe\Subscription::OBJECT_NAME => \WPForms\Vendor\Stripe\Subscription::class, \WPForms\Vendor\Stripe\SubscriptionItem::OBJECT_NAME => \WPForms\Vendor\Stripe\SubscriptionItem::class, \WPForms\Vendor\Stripe\SubscriptionSchedule::OBJECT_NAME => \WPForms\Vendor\Stripe\SubscriptionSchedule::class, \WPForms\Vendor\Stripe\Tax\Calculation::OBJECT_NAME => \WPForms\Vendor\Stripe\Tax\Calculation::class, \WPForms\Vendor\Stripe\Tax\CalculationLineItem::OBJECT_NAME => \WPForms\Vendor\Stripe\Tax\CalculationLineItem::class, \WPForms\Vendor\Stripe\Tax\Settings::OBJECT_NAME => \WPForms\Vendor\Stripe\Tax\Settings::class, \WPForms\Vendor\Stripe\Tax\Transaction::OBJECT_NAME => \WPForms\Vendor\Stripe\Tax\Transaction::class, \WPForms\Vendor\Stripe\Tax\TransactionLineItem::OBJECT_NAME => \WPForms\Vendor\Stripe\Tax\TransactionLineItem::class, \WPForms\Vendor\Stripe\TaxCode::OBJECT_NAME => \WPForms\Vendor\Stripe\TaxCode::class, \WPForms\Vendor\Stripe\TaxId::OBJECT_NAME => \WPForms\Vendor\Stripe\TaxId::class, \WPForms\Vendor\Stripe\TaxRate::OBJECT_NAME => \WPForms\Vendor\Stripe\TaxRate::class, \WPForms\Vendor\Stripe\Terminal\Configuration::OBJECT_NAME => \WPForms\Vendor\Stripe\Terminal\Configuration::class, \WPForms\Vendor\Stripe\Terminal\ConnectionToken::OBJECT_NAME => \WPForms\Vendor\Stripe\Terminal\ConnectionToken::class, \WPForms\Vendor\Stripe\Terminal\Location::OBJECT_NAME => \WPForms\Vendor\Stripe\Terminal\Location::class, \WPForms\Vendor\Stripe\Terminal\Reader::OBJECT_NAME => \WPForms\Vendor\Stripe\Terminal\Reader::class, \WPForms\Vendor\Stripe\TestHelpers\TestClock::OBJECT_NAME => \WPForms\Vendor\Stripe\TestHelpers\TestClock::class, \WPForms\Vendor\Stripe\Token::OBJECT_NAME => \WPForms\Vendor\Stripe\Token::class, \WPForms\Vendor\Stripe\Topup::OBJECT_NAME => \WPForms\Vendor\Stripe\Topup::class, \WPForms\Vendor\Stripe\Transfer::OBJECT_NAME => \WPForms\Vendor\Stripe\Transfer::class, \WPForms\Vendor\Stripe\TransferReversal::OBJECT_NAME => \WPForms\Vendor\Stripe\TransferReversal::class, \WPForms\Vendor\Stripe\Treasury\CreditReversal::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\CreditReversal::class, \WPForms\Vendor\Stripe\Treasury\DebitReversal::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\DebitReversal::class, \WPForms\Vendor\Stripe\Treasury\FinancialAccount::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\FinancialAccount::class, \WPForms\Vendor\Stripe\Treasury\FinancialAccountFeatures::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\FinancialAccountFeatures::class, \WPForms\Vendor\Stripe\Treasury\InboundTransfer::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\InboundTransfer::class, \WPForms\Vendor\Stripe\Treasury\OutboundPayment::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\OutboundPayment::class, \WPForms\Vendor\Stripe\Treasury\OutboundTransfer::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\OutboundTransfer::class, \WPForms\Vendor\Stripe\Treasury\ReceivedCredit::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\ReceivedCredit::class, \WPForms\Vendor\Stripe\Treasury\ReceivedDebit::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\ReceivedDebit::class, \WPForms\Vendor\Stripe\Treasury\Transaction::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\Transaction::class, \WPForms\Vendor\Stripe\Treasury\TransactionEntry::OBJECT_NAME => \WPForms\Vendor\Stripe\Treasury\TransactionEntry::class, \WPForms\Vendor\Stripe\UsageRecord::OBJECT_NAME => \WPForms\Vendor\Stripe\UsageRecord::class, \WPForms\Vendor\Stripe\UsageRecordSummary::OBJECT_NAME => \WPForms\Vendor\Stripe\UsageRecordSummary::class, \WPForms\Vendor\Stripe\WebhookEndpoint::OBJECT_NAME => \WPForms\Vendor\Stripe\WebhookEndpoint::class];
}
