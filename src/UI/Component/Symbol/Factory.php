<?php
declare(strict_types=1);

namespace ILIAS\UI\Component\Symbol;

/**
 * Interface Factory
 *
 * @package ILIAS\UI\Component\Symbol
 */
interface Factory
{

    /**
     * ---
     * description:
     *   purpose: >
     *     Icons are quickly comprehensible and recognizable graphics that are presented with a text label.
     *     They indicate the functionality or nature of the element they illustrate:
     *     Icons will mainly be used in front of object-titles, e.g. in the
     *     header, the tree and in repository listing.
     *     Icons can be presented in a disabled state. Disabled Icons visually communicate that the depicted
     *     functionality is not available for the intended audience.
     *   composition: >
     *     Icons come in three fixed sizes: small, medium and large.
     *     They can be presented with an additional "abbreviation",
     *     a text of a few characters that will be rendered on top of the image.
     *     The Disabled Icons are visually muted: A color shade covers the Icon.
     *   effect: >
     *     Icons themselves are not interactive; however they are allowed
     *     within interactive containers.
     *   rivals:
     *     Glyph: >
     *       Glyphs are typographical characters that act as a trigger for
     *       some action.
     *     Image: >
     *       Images belong to the content and can be purely decorative.
     *
     *
     * rules:
     *   usage:
     *     1: Icons MUST be used to represent objects or context.
     *     2: Icons MUST be used in combination with a title or label.
     *     3: An unique Icon MUST always refer to the same thing.
     *   style:
     *     1: Icons MUST have a class indicating their usage.
     *     2: Icons MUST be tagged with a CSS-class indicating their size.
     *   accessibility:
     *     1: Icons MUST bear an aria-label.
     *     2: Disabled Icons MUST bear an aria-label indicating the disabled status.
     *   wording:
     *     1: The aria-label MUST state the represented object-type.
     *     2: The abbreviation SHOULD consist of one or two letters.
     * ---
     *
     * @return \ILIAS\UI\Component\Symbol\Icon\Factory
     **/
    public function icon() : Icon\Factory;

    /**
     * ---
     * description:
     *   purpose: >
     *       Glyphs map a generally known concept or symbol to a specific concept in ILIAS.
     *       Glyphs don’t come with a text label: They are used when space is scarce.
     *   composition: >
     *       A glyph is a typographical character. As any other typographical character, they can be
     *       manipulated by regular CSS. If hovered, they can change either their color or their background-color in order to indicate possible interactions.
     *   effect: >
     *       Glyphs act as a trigger for some action (such as opening a certain
     *       Overlay type) or as a shortcut.
     *   rivals:
     *       Icon: >
     *           Standalone Icons are not interactive. Icons can be in an interactive container however.
     *           Icons merely serve as an additional hint of the functionality described by a title.
     *           Glyphs are visually distinguished from object Icons: they are monochrome.
     * background: >
     *     "In typography, a glyph is an elemental symbol within an agreed set of
     *     symbols, intended to represent a readable character for the purposes
     *     of writing and thereby expressing thoughts, ideas and concepts."
     *     (https://en.wikipedia.org/wiki/Glyph)
     *
     *     Lidwell states that such symbols are used "to improve the recognition
     *     and recall of signs and controls".
     *
     * rules:
     *   usage:
     *       1: Glyphs MUST NOT be used in content titles.
     *       2: >
     *          Glyphs MUST be used for cross-sectional functionality such as mail for
     *          example and NOT for representing objects.
     *       3: >
     *          Glyphs SHOULD be used for very simple tasks that are repeated at
     *          many places throughout the system.
     *       4: >
     *          Services such as mail MAY be represented either by a Glyph OR by an Icon plus text label, depending on the usage scenario.
     *   style:
     *       1: >
     *          All Glyphs SHOULD be taken from the Bootstrap Glyphicon Halflings
     *          set. Exceptions are possible, but MUST be approved by the JF.
     *   accessibility:
     *       1: >
     *          The functionality triggered by the Glyph MUST be indicated to
     *          screen readers with the attributes aria-label or aria-labelledby.
     * ---
     * @return  \ILIAS\UI\Component\Symbol\Glyph\Factory
     */
    public function glyph() : Glyph\Factory;


    /**
     * ---
     * description:
     *   purpose: >
     *     Avatars are graphical representations of a user. They contain a
     *     user-defined picture, a deputy-picture or an abbreviation for it's username.
     *     Avatars are used in places where there is a direct reference to a user
     *     (-account), such as the entries in the Metabar entry "user", a members
     *     gallery the of a course or the avatar in a forum-post.
     *   composition: >
     *     Avatars are available in a fixed size. They always contain either a
     *     picture (defined by the user himself or a general replacement) or an
     *     abbreviation that indicates the username of the user.
     *     In the case of abbreviations, the avatar receives a colored background.
     *   effect: >
     *     The Avatar itself has no own interaction but can be used in a context
     *     which triggers further actions (such as a Bulky Button in the Meta Bar).
     *   rivals:
     *     Glyph: >
     *       Glyphs are typographical characters that act as a trigger for
     *       some action. There is a user Glyph as well.
     *     Image: >
     *       Images belong to the content and can be purely decorative.
     *     Icon: >
     *       Avatars represent a User in the System, Icons just an Object which is
     *       not defined further.
     * context:
     *   1: user slate in the Meta Bar
     *   2: members gallery in a course
     *   3: forum posts
     * rules:
     *   usage:
     *     1: Avatars MUST be used to represent a specific user.
     *     2: Avatars MUST be used in combination with the represented username.
     *   accessibility:
     *     1: Avatars MUST bear an aria-label with the username.
     *   responsiveness:
     *     1: the avatar MUST adjust it's size to the parent container.
     * ---
     * @return \ILIAS\UI\Component\Symbol\Avatar\Factory
     **/
    public function avatar() : Avatar\Factory;
}
