<?php

declare(strict_types=1);

namespace KejawenLab\Application\Controller\Node;

use DH\Auditor\Provider\Doctrine\Persistence\Reader\Reader;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use KejawenLab\ApiSkeleton\Audit\AuditService;
use KejawenLab\ApiSkeleton\Security\Annotation\Permission;
use KejawenLab\Application\Entity\Node;
use KejawenLab\Application\Domain\NodeService;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;
use Psr\Cache\InvalidArgumentException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @Permission(menu="AUDIT", actions={Permission::VIEW})
 *
 * @author Muhamad Surya Iksanudin<surya.iksanudin@gmail.com>
 */
final class Audit extends AbstractFOSRestController
{
    public function __construct(private NodeService $service, private AuditService $audit, private Reader $reader)
    {
    }

    /**
     * @Rest\Get("services/nodes/{id}/audit", name=Audit::class, priority=-255)
     *
     * @Cache(expires="+17 minute", public=false)
     *
     * @OA\Tag(name="Node")
     * @OA\Response(
     *     response=200,
     *     description= "Audit list",
     *     content={
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     properties={
     *                         @OA\Property(
     *                             property="entity",
     *                             type="object",
     *                             @OA\Schema(
     *                                 type="object",
     *                                 ref=@Model(type=Node::class, groups={"read"})
     *                             )
     *                         ),
     *                         @OA\Property(type="string", property="type"),
     *                         @OA\Property(type="string", property="user_id"),
     *                         @OA\Property(type="string", property="username"),
     *                         @OA\Property(type="string", property="ip_address"),
     *                         @OA\Property(
     *                             type="array",
     *                             property="data",
     *                             @OA\Items(
     *                                 @OA\Property(type="string", property="new"),
     *                                 @OA\Property(type="string", property="old"),
     *                             )
     *                         )
     *                     }
     *                 )
     *             )
     *         )
     *     }
     * )
     *
     * @Security(name="Bearer")
     *
     * @param string $id
     *
     * @return View
     *
     * @throws InvalidArgumentException
     */
    public function __invoke(string $id): View
    {
        if (!$entity = $this->service->get($id)) {
            throw new NotFoundHttpException();
        }

        if (!$this->reader->getProvider()->isAuditable(Node::class)) {
            return $this->view([]);
        }

        return $this->view($this->audit->getAudits($entity, $id)->toArray());
    }
}
