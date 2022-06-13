<?php

namespace Brecht\LaravelQueueInterop\Facades;

use Interop\Amqp\AmqpBind;
use Interop\Amqp\AmqpConsumer;
use Interop\Amqp\AmqpContext;
use Interop\Amqp\AmqpDestination;
use Interop\Amqp\AmqpMessage;
use Interop\Amqp\AmqpProducer;
use Interop\Amqp\AmqpQueue;
use Interop\Amqp\AmqpTopic;
use Interop\Queue\Queue;
use Interop\Queue\SubscriptionConsumer;

/**
 * @method static AmqpContext context(?string $name = null)
 * @method static AmqpQueue createQueue($queueName)
 * @method static AmqpQueue createTemporaryQueue()
 * @method static AmqpProducer createProducer()
 * @method static AmqpConsumer createConsumer(AmqpDestination $destination)
 * @method static AmqpTopic createTopic($topicName)
 * @method static AmqpMessage createMessage($body = '', array $properties = [], array $headers = [])
 * @method static SubscriptionConsumer createSubscriptionConsumer()
 * @method static void purgeQueue(Queue $queue)
 * @method static void close()
 * @method static void declareTopic(AmqpTopic $topic)
 * @method static void deleteTopic(AmqpTopic $topic)
 * @method static void declareQueue(AmqpQueue $queue)
 * @method static void deleteQueue(AmqpQueue $queue)
 * @method static void bind(AmqpBind $bind)
 * @method static void unbind(AmqpBind $bind)
 * @method static void setQos(int $prefetchSize, int $prefetchCount, bool $global)
 */
class AmqpInterop extends QueueInterop
{
}
